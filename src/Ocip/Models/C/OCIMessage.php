<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCIMessage
 *
 * A message contains a list of requests or responses. The server processes all the
 * requests
 *         and returns a message with a corresponding list of responses.
 */
class OCIMessage
{

    /**
     * The session id identifies a logged-in user. The client is responsible to ensure the uniqueness of the session id.
     *             
     *
     * @ElementName sessionId
     * @var string|null
     */
    private $sessionId = null;

    /**
     * The user id identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *             
     *
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * The phone number identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *               The phone number must be in E.164 format.  Any DN associated with the user may be used. 
     *               BroadSoft recommends only using this element in the rare case when the userId is not known.
     *             
     *
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * List of requests or responses.
     *
     * @ElementName command
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[]
     */
    private $command = array(
        
    );

    /**
     * Getter for sessionId
     *
     *
     *               The session id identifies a logged-in user. The client is responsible to ensure the uniqueness of the session id.
     *             
     *
     * @ElementName sessionId
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Setter for sessionId
     *
     *
     *               The session id identifies a logged-in user. The client is responsible to ensure the uniqueness of the session id.
     *             
     *
     * @ElementName sessionId
     * @param string|null $sessionId
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * Getter for userId
     *
     *
     *               The user id identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *             
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     *
     *               The user id identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *             
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     *
     *               The phone number identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *               The phone number must be in E.164 format.  Any DN associated with the user may be used. 
     *               BroadSoft recommends only using this element in the rare case when the userId is not known.
     *             
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     *
     *               The phone number identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *               The phone number must be in E.164 format.  Any DN associated with the user may be used. 
     *               BroadSoft recommends only using this element in the rare case when the userId is not known.
     *             
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for command
     *
     * List of requests or responses.
     *
     * @ElementName command
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[]
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Setter for command
     *
     * List of requests or responses.
     *
     * @ElementName command
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[] $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * Adder for command
     *
     * List of requests or responses.
     *
     * @ElementName command
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand $command
     * @return $this
     */
    public function addCommand($command)
    {
        $this->command []= $command;
        return $this;
    }


}

