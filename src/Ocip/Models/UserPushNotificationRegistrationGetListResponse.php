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
 *         Replaced by: UserPushNotificationRegistrationGetListResponse21sp1
 *
 * @see UserPushNotificationRegistrationGetListRequest
 * @see UserPushNotificationRegistrationGetListResponse21sp1
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46490","type":"sequence"}]
 */
class UserPushNotificationRegistrationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName registrationsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:46490
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $registrationsTable = null;

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

