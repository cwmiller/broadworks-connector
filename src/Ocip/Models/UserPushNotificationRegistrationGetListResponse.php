<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListResponse
 *
 * Response to UserPushNotificationRegistrationGetListRequest.
 *         
 *         A registration has more than one row in the response when the registration includes more than one token.
 *         
 *         Registration Date uses the format "yyyy-MM-dd'T'HH:mm:ss.SSSZ" in the time zone of the requested user.
 *         Example: 2010-10-01T09:30:00:000-0400.
 *         
 *         Contains a table with a row for each registration and token with column headings :
 *         "User Id",  "Registration Id",  "Application Id",  "Application Version",  "Device Os Type",  
 *         "Device Os Version",  "Registration Date",  "Token",  "Events"
 *
 * @see UserPushNotificationRegistrationGetListRequest
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:2871","type":"sequence"}]
 */
class UserPushNotificationRegistrationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName registrationsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:2871
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $registrationsTable = null;

    /**
     * Getter for registrationsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRegistrationsTable()
    {
        return $this->registrationsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationsTable;
    }

    /**
     * Setter for registrationsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $registrationsTable
     * @return $this
     */
    public function setRegistrationsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $registrationsTable)
    {
        $this->registrationsTable = $registrationsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationsTable()
    {
        $this->registrationsTable = null;
        return $this;
    }


}

