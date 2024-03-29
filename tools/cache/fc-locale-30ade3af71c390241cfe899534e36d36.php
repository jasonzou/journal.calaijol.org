<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Access log options',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Create log files',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Activating this option will make the plugin create access log files inside the files directory. Those files should be used to extract the usage statistics data. If you don\'t want to create more access log files you can leave this option disabled and use your own server log access files.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Parse log files regex',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'The default regex used can parse apache access log files in combined format and also the plugin\'s log files. If your access log files are in a different format you will have to insert a regex capable of parsing them and giving the expected values. See UsageStatsLoader::_getDataFromLogEntry() for more information.',
  'plugins.generic.usageStats.settings.saved' => 'Usage statistics plugin settings saved',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Data privacy option',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'In order to be able to activate this option, the file where the salt will be saved has to be defined: insert the section \'[usageSats]\' in the config.inc.php and define the variable \'salt_filepath\' there. The file must exist and it must be writable for the web user. For further information on the requirements for this plugin option please see the plugin README file.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Activate this option to use a plugin version that respects privacy legislations, i.e. that is logging hashed IP addresses, informs the users about the tracking and provides an opt-out option for users. Note: when using this option you will not be able to use the geo features of the plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Respect data privacy',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Usage statistics file loader task',
  'plugins.generic.usageStats.openFileFailed' => 'The file {$file} could not be opened and was rejected.',
  'plugins.generic.usageStats.invalidLogEntry' => 'The line number {$lineNumber} from the file {$file} is not a valid log entry and the file was rejected.',
  'plugins.generic.usageStats.removeUrlError' => 'The line number {$lineNumber} from the file {$file} contains an url that the system can\'t remove the base url from.',
  'plugins.generic.usageStats.loadDataError' => 'Couldn\'t load data extracted from file {$file}. The error was: {$error}. The file was moved to stage again.',
  'plugins.generic.usageStats.displayName' => 'Usage Statistics',
  'plugins.generic.usageStats.description' => 'Present data objects usage statistics. Can use server access log files to extract statistics.',
  'plugins.generic.usageStats.pluginDisabled' => 'Usage statistics plugin is disabled. No log files processed.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'The directory {$directory} is not empty. This could indicate a previously failed process, or a concurrently running process.  This file will be automatically reprocessed if you are also using scheduledTasksAutoStage.xml, otherwise you will need to manually move any orphaned files in the processing directory back into the stage directory.',
  'plugins.generic.usageStats.noCounterBotList' => 'The COUNTER bot list could not be found, or more than one list is present. The file {$file} could not be processed.',
  'plugins.generic.usageStats.failedCounterBotList' => 'The COUNTER bot list {$botlist} could not be opened. The file {$file} could not be processed.',
  'plugins.reports.usageStats.report.displayName' => 'OJS usage statistics report',
  'plugins.reports.usageStats.report.description' => 'OJS default usage statistics report (COUNTER ready)',
  'plugins.reports.usageStats.optout.displayName' => 'Usage Statistics Privacy Information',
  'plugins.reports.usageStats.optout.description' => 'Usage Statistics Privacy Information',
  'plugins.generic.usageStats.optout.title' => 'Usage Statistics Information',
  'plugins.generic.usageStats.optout.shortDesc' => 'We log anonymous usage statistics. Please read the <a href="{$privacyInfo}">privacy information</a> for details.',
  'plugins.generic.usageStats.optout.description' => '<h3>General Privacy Information</h3>
		<p>Please refer to our general <a href="{$privacyStatementUrl}">privacy statement</a>.</p>
		<h3>Usage Statistics</h3>
		<p>In order to be able to analyse usage and impact of our journal and the published articles, we collect and log access to the journal’s homepage, issues, articles, galleys and supplementary files. In the process all data is anonymised. No personal information is logged. IP addresses are anonymised by being hashed (using <em>SHA 256</em>) in combination with a <em>secure 64 characters long salt</em> that is automatically <em>randomly generated and overridden on a daily basis</em>. Therefore IP addresses cannot be reconstructed.</p>
		<p>The following information is collected next to the anonymised IP addresses:</p>
		<ul>
		<li>Access type (i.e. administrative)</li>
		<li>Request time</li>
		<li>Requested URL</li>
		<li>HTTP status code</li>
		<li>Browser</li>
		</ul>
		<p>The collected data is only used for evaluation purposes. No IP addresses are mapped to user IDs. It is technically impossible to trace a specific set of data to a specific IP address.</p>',
  'plugins.generic.usageStats.optout.done' => '<p>You successfully opted out of usage statistics collection. While you see this message no statictics will be collected from your usage of this site. Click the below button to revert your decision.</p>',
  'plugins.generic.usageStats.optin' => 'Opt In',
  'plugins.generic.usageStats.optout' => 'Opt Out',
  'plugins.generic.usageStats.optout.cookie' => '<p>If you wish you can opt-out of the data collection process. By clicking the opt-out button below, you can actively decide against participating in the statistical analysis. When clicking the opt-out button a <em>cookie</em> is being created on your system to store your decision. If the privacy settings of your browser lead to cookies being automatically deleted you will have to opt-out again the next time you access this journal. The cookie is only valid for one browser. If you use a different browser, you will have to opt out again. No individual information is stored within this cookie. This cookie lease is valid for one year after your last access.</p>
		<p>Please bear in mind that general server logs are not affected by your decision to opt-out of the detailed evaluation process. Please refer to our general <a href="{$privacyStatementUrl}">privacy statement</a>.</p>',
  'plugins.reports.usageStats.metricType' => 'OJS/COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Open Journal Systems statistics (COUNTER ready)',
); ?>