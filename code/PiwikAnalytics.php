<?php
class PiwikAnalytics extends DataExtension

{
    static $db = array(
        'PiwikAnalyticsUrlServer' => 'Varchar(250)',
        'PiwikAnalyticsDomain' => 'Varchar(250',
		'PiwikAnalyticsAccountID' => 'Int'
    );
    
        public function updateCMSFields(FieldList $fields)  {
                $fields->addFieldToTab('Root.Piwik', new TextField('PiwikAnalyticsUrlServer', 'Piwik Analytics Url Server (http://...)'));
                $fields->addFieldToTab('Root.Piwik', new TextField('PiwikAnalyticsDomain', 'Domain'));
                $fields->addFieldToTab('Root.Piwik', new NumericField('PiwikAnalyticsAccountID', 'Piwik Analytics Id domain'));
        }
         
        function contentControllerInit($controller) {
        }
         
}