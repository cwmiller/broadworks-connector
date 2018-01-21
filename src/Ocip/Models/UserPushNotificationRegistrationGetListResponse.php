<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationRegistrationGetListResponse
 *
 * Response to UserPushNotificationRegistrationGetListRequest.
 *         
 *         A registration has more than one row in the response when the
 * registration includes more than one token.
 *         
 *         Registration Date uses the format "yyyy-MM-dd'T'HH:mm:ss.SSSZ" in the
 * time zone of the requested user.
 *         Example: 2010-10-01T09:30:00:000-0400.
 *         
 *         Contains a table with a row for each registration and token with column
 * headings :
 *         "User Id",  "Registration Id",  "Application Id",  "Application
 * Version",  "Device Os Type",  
 *         "Device Os Version",  "Registration Date",  "Token",  "Events"
 */
class UserPushNotificationRegistrationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName registrationsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $registrationsTable = null;

    /**
     * Getter for registrationsTable
     *
     * @ElementName registrationsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRegistrationsTable()
    {
        return $this->registrationsTable;
    }

    /**
     * Setter for registrationsTable
     *
     * @ElementName registrationsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $registrationsTable
     * @return $this
     */
    public function setRegistrationsTable($registrationsTable)
    {
        $this->registrationsTable = $registrationsTable;
        return $this;
    }


}

