<?php return array (
  'plugins.generic.pln' => 'PKP PLN Plugin',
  'plugins.generic.pln.description' => 'The PKP PLN plugin will deposit your published content into the PKP Private LOCKSS Network for preservation.',
  'plugins.generic.pln.manager.setup.description' => '<strong>PKP Private LOCKSS Network</strong><br /><br />Please read the <a href="https://pkp.sfu.ca/pkp-lockss/" target="_blank">overview of the PKP PLN</a> and complete <a href="{$plnPluginURL}">this simple form</a>. This option will enable inclusion of your journal in the Public Knowledge Project Private LOCKSS Network (PKP PLN).',
  'plugins.generic.pln.settings_page' => 'PKP PLN Plugin - Settings',
  'plugins.generic.pln.settings' => 'Settings',
  'plugins.generic.pln.settings.saved' => 'PKP PLN settings saved.',
  'plugins.generic.pln.settings.terms_of_use' => 'Terms of Use',
  'plugins.generic.pln.settings.terms_of_use_help' => 'Before depositing to a network it is necessary to agree to all of its terms of use.',
  'plugins.generic.pln.settings.terms_of_use_agree' => 'I Agree',
  'plugins.generic.pln.settings.journal_uuid' => 'Journal Identifier',
  'plugins.generic.pln.settings.journal_uuid_help' => 'This is your journal\'s unique identifier for the PKP PLN. You may need to share this with PKP PLN administrators for support purposes.',
  'plugins.generic.pln.settings.refresh' => 'Refresh',
  'plugins.generic.pln.settings.refresh_help' => 'If for some reason there are no terms listed above or you know these terms have been updated, click Refresh to update the terms listed above.',
  'plugins.generic.pln.settings.pln_network' => 'PLN Network URL',
  'plugins.generic.pln.settings.pln_network_help' => 'The URL of your network\'s staging server. Do not change this unless instructed to do so by someone from your network.',
  'plugins.generic.pln.settings.pln_network_invalid' => 'The specified URL is not valid. Please double-check the URL and try again.',
  'plugins.generic.pln.settings.pln_network_path_invalid' => 'PLN Network URLs must include the scheme and host name, and may include a port number. They must not include paths, query strings, user names or passwords, or URL fragments.',
  'plugins.generic.pln.required.object_type' => 'Please choose an deposit object type.',
  'plugins.generic.pln.required.object_threshold' => 'Please choose a deposit object threshold.',
  'plugins.generic.pln.required.terms_of_use_agreement' => 'Agreement to the network\'s terms of use is required in order to deposit to the PLN.',
  'plugins.generic.pln.objects.article' => 'Article',
  'plugins.generic.pln.objects.issue' => 'Issue',
  'plugins.generic.pln.status_page' => 'PKP PLN Plugin - Status',
  'plugins.generic.pln.status.network_status' => 'Network Status: {$networkStatusMessage}',
  'plugins.generic.pln.status.deposits' => 'Deposits',
  'plugins.generic.pln.status' => 'Status',
  'plugins.generic.pln.status.id' => 'ID',
  'plugins.generic.pln.status.type' => 'Type',
  'plugins.generic.pln.status.items' => 'Items',
  'plugins.generic.pln.status.packaged' => 'Packaged',
  'plugins.generic.pln.status.transferred' => 'Transferred',
  'plugins.generic.pln.status.received' => 'Received',
  'plugins.generic.pln.status.syncing' => 'Syncing',
  'plugins.generic.pln.status.synced' => 'Synced',
  'plugins.generic.pln.status.updated' => 'Updated',
  'plugins.generic.pln.status.local_failure' => 'Local Failure',
  'plugins.generic.pln.status.remote_failure' => 'Remote Failure',
  'plugins.generic.pln.status.reset' => 'Reset',
  'plugins.generic.pln.status.yes' => 'Yes',
  'plugins.generic.pln.status.no' => 'No',
  'plugins.generic.pln.depositorTask.name' => 'PKP PLN Depositor Task',
  'plugins.generic.pln.notifications.processing_for' => 'Depositor processing for {$title}.',
  'plugins.generic.pln.notifications.getting_servicedocument' => 'Getting service document.',
  'plugins.generic.pln.notifications.pln_not_accepting' => 'The PKP PLN is not currently accepting deposits.',
  'plugins.generic.pln.notifications.pln_accepting' => 'The PKP PLN is accepting deposits.',
  'plugins.generic.pln.notifications.check_status' => 'Check the status of your deposits.',
  'plugins.generic.pln.notifications.issn_missing' => 'Your journal must have an ISSN to deposit content to the PKP PLN.',
  'plugins.generic.pln.notifications.http_error' => 'There was an error connecting to the PKP PLN - please contact your system administrator.',
  'plugins.generic.pln.notifications.terms_updated' => 'The PKP PLN terms of use have been updated. Agreement with new terms is required to continue depositing.',
  'plugins.generic.pln.notifications.curl_missing' => 'CURL support must be enabled to proceed.',
  'plugins.generic.pln.notifications.zip_missing' => 'ZipArchive support must be enabled to proceed.',
  'plugins.generic.pln.notifications.issn_setting' => 'Your journal must have an ISSN before you can agree to the terms of service. You can enter the ISSN on the Journal Settings page. Once the journal ISSN is entered, the terms of service will be shown below.',
  'plugins.generic.pln.notifications.tar_missing' => 'Your system must have a tar executable.',
  'plugins.generic.pln.error.network.servicedocument' => 'Network error {$error} connecting to the PLN to get the service document.',
  'plugins.generic.pln.error.network.deposit' => 'Network error {$error} connecting to the PLN to send the deposit.',
  'plugins.generic.pln.error.http.servicedocument' => 'PLN server returned HTTP error {$error} when attempting to get the service document.',
  'plugins.generic.pln.error.http.deposit' => 'PLN server returned HTTP error {$error} when sending the deposit.',
  'plugins.generic.pln.error.depositor.missingpackage' => 'Cannot find package file {$file}.',
  'plugins.generic.pln.error.depositor.export.articles.error' => 'An error occured while exporting articles. The server\'s error log may have more information.',
  'plugins.generic.pln.error.depositor.export.issue.error' => 'An error occured while exporting an issue. The server\'s error log may have more information.',
  'plugins.generic.pln.error.handler.uuid.invalid' => 'The requested UUID is not valid or is not formatted correctly.',
  'plugins.generic.pln.error.handler.uuid.notfound' => 'There is no deposit with the requested UUID.',
  'plugins.generic.pln.error.handler.file.notfound' => 'The deposit file cannot be found. It may not have been packaged yet, or the package may have been removed.',
  'plugins.generic.pln.depositor.statusupdates' => 'Processing deposit status updates.',
  'plugins.generic.pln.depositor.updatedcontent' => 'Processing updated content.',
  'plugins.generic.pln.depositor.newcontent' => 'Processing new content.',
  'plugins.generic.pln.depositor.packagingdeposits' => 'Packaging content for deposit.',
  'plugins.generic.pln.depositor.transferringdeposits' => 'Sending deposits to the PLN.',
  'plugins.generic.plngateway.displayName' => 'PLN Gateway',
  'plugins.generic.plngateway.description' => 'Reports PLN Status and recent article titles for the staging server.',
); ?>