<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iodev\Whois\Factory as WhoisFactory;

class WhoisController extends Controller
{
    public function index()
    {
        return view('front.whois.index');
    }

    public function checkIndex()
    {
        return view('front.whois.result');
    }

    // Handle the form submission and check the WHOIS data
    public function check(Request $request)
    {
       // Validation to accept URLs or plain domain names
       $request->validate([
        'domain' => ['required', 'regex:/^(https?:\/\/)?(www\.)?([a-zA-Z0-9-_]+\.)?[a-zA-Z0-9][a-zA-Z0-9-]+\.[a-zA-Z]{2,11}(\/)?$/']
    ]);

    // Preprocess the domain: Remove protocols (http/https), 'www.', and any trailing slashes
    $domain = $request->domain;
    $domain = preg_replace('/^https?:\/\//', '', $domain); // Remove http:// or https://
    $domain = preg_replace('/^www\./', '', $domain); // Remove www.
    $domain = rtrim($domain, '/'); // Remove any trailing slash

        try {
            $whois = WhoisFactory::get()->createWhois();

            // Lookup the domain and get the raw response
            $response = $whois->lookupDomain($domain);

            // Load WHOIS information
            $info = $whois->loadDomainInfo($domain);

           // Check if WHOIS info is available
           if ($info) {
               // Parsing raw data to extract contact info
               $rawData = $response->getText();

                // Parsing raw data to extract contact info
                $adminContact = $this->extractContact($rawData, 'Admin');
                $registrantContact = $this->extractContact($rawData, 'Registrant');
                $techContact = $this->extractContact($rawData, 'Tech');

               return view('front.whois.result', [
                   'info' => $info,
                   'adminContact' => $adminContact,
                   'registrantContact' => $registrantContact,
                   'techContact' => $techContact,
                   'rawData' => $rawData
               ]);
           }else {

                sweetalert()->warning('Domain not found or invalid.');
                return back();
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error: ' . $e->getMessage()]);
        }
    }

    protected function extractContact($rawData, $contactType) {
        // Define a pattern to match the contact information based on the type (Admin, Registrant, Tech)
        $pattern = "/{$contactType} Name:\s*(.*?)\s*{$contactType} Organization:\s*(.*?)\s*{$contactType} Street:\s*(.*?)\s*{$contactType} City:\s*(.*?)\s*{$contactType} State\/Province:\s*(.*?)\s*{$contactType} Postal Code:\s*(.*?)\s*{$contactType} Country:\s*(.*?)\s*{$contactType} Phone:\s*(.*?)\s*{$contactType} Email:\s*(.*?)\n/mi";
        
        if (preg_match($pattern, $rawData, $matches)) {
            return [
                'name' => trim($matches[1]),
                'organization' => trim($matches[2]),
                'street' => trim($matches[3]),
                'city' => trim($matches[4]),
                'state' => trim($matches[5]),
                'postal_code' => trim($matches[6]),
                'country' => trim($matches[7]),
                'phone' => trim($matches[8]),
                'email' => trim($matches[9])
            ];
        }
        
        return 'N/A'; // Return 'N/A' if no contact information is found
    }
}