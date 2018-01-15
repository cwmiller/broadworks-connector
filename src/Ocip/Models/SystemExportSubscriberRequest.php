<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExportSubscriberRequest
 *
 * Request subscribers be exported to files on the AS filesystem.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *
 *         ***** Warning *****:
 *         This activity should only be done during non-busy hours on the secondary
 *         provisioning server because this may cause large amounts of data to be
 *         dumped to disk and it may take some time to execute.
 */
class SystemExportSubscriberRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

