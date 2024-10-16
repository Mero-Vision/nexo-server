<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layout.header')
</head>

<body>

    @include('front.layout.loader')
    @include('front.layout.nav')

    <div class="main">

        <br>
        <section class="pricing-section ptb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>WHOIS Result for {{ $info->domainName }}</h2>
                            <p class="lead">Discover essential domain information with our WHOIS Lookup service. Enjoy competitive pricing on domains and hosting, starting at just $2.99/month.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 col-md-7">
                        <div class="text-center mb-5 radio-box-wrap billingCycle">
                            <div class="container">

                                <div class="mb-3">
                                    <p><strong>Domain Name:</strong> {{ $info->domainName }}</p>
                                    <p><strong>Registrar:</strong> {{ $info->registrar }}</p>
                                    <p><strong>Creation Date:</strong>
                                        {{ \Carbon\Carbon::parse($info->creationDate)->format('F j, Y') }}
                                        ({{ \Carbon\Carbon::parse($info->creationDate)->diffForHumans() }})</p>
                                    <p><strong>Expiration Date:</strong>
                                        {{ \Carbon\Carbon::parse($info->expirationDate)->format('F j, Y') }}
                                        ({{ \Carbon\Carbon::parse($info->expirationDate)->diffForHumans() }})</p>
                                    <p><strong>Updated Date:</strong>
                                        {{ $info->updatedDate ? \Carbon\Carbon::createFromTimestamp($info->updatedDate)->format('F j, Y') . ' (' . \Carbon\Carbon::createFromTimestamp($info->updatedDate)->diffForHumans() . ')' : 'N/A' }}
                                    </p>


                                </div>

                                <h4>Domain Status</h4>
                                <p><strong>Status:</strong> {{ implode(', ', $info->states) }}</p>

                                <h4>Nameservers</h4>
                                <p><strong>Nameservers:</strong> {{ implode(', ', $info->nameServers) }}</p>

                                <h4>Contact Information</h4>
                                <p><strong>Admin Contact:</strong> {{ $adminContact }}</p>
                                <p><strong>Registrant Contact:</strong> {{ $registrantContact }}</p>
                                <p><strong>Technical Contact:</strong> {{ $techContact['name'] ?? 'N/A' }}</p>

                                <h4>Other WHOIS Information</h4>
                                <p><strong>Raw WHOIS Data:</strong></p>
                                <pre>{{ $rawData }}</pre>

                                <a href="{{ route('whois.index') }}">Check another domain</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>






    </div>

    <style>
        pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>


    @include('front.layout.footer')
</body>

</html>
