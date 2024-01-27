<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetRequest23
 *
 * Request to get the File System parameters.
 *         change of behavior is that CLI System/MediaFileSystem/get will no longer show the password
 *         The response is either SystemConfigurableFileSystemGetResponse23 or ErrorResponse.
 *
 * @see SystemConfigurableFileSystemGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9650","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

