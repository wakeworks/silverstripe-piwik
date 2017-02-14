<?php
    class PiwikAnalyticsExtender extends DataExtension
    {
            function contentControllerInit($controller) {
                                     
                    $accountId = $this->owner->SiteConfig->PiwikAnalyticsAccountID;
                    $domain = $this->owner->SiteConfig->PiwikAnalyticsDomain;                  
                    $serverUrl = $this->owner->SiteConfig->PiwikAnalyticsUrlServer;

                                     
                    if($accountId!=""&&$serverUrl!="") {
                     
					Requirements::customScript('

						 var _paq = _paq || [];
						  _paq.push(["setDomains", ["*.'.$domain.'"]]);
						  _paq.push(["trackPageView"]);
						  _paq.push(["enableLinkTracking"]);
						  (function() {
						    var u="//'.$serverUrl.'/";
						    _paq.push(["setTrackerUrl", u+"piwik.php"]);
						    _paq.push(["setSiteId", '.$accountId.']);
						    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
						    g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
						  })();


													');                
                    }
            }
    }
