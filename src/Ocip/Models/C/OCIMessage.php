<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCIMessage
 *
 * A message contains a list of requests or responses. The server processes all the requests
 *         and returns a message with a corresponding list of responses.
 *
 * @Groups [{"id":"5a0dbb6ff453924acebff71a89ec0dc8:37","type":"sequence","children":[{"id":"5a0dbb6ff453924acebff71a89ec0dc8:38","type":"choice"}]}]
 */
class OCIMessage
{
    /**
     * @ElementName sessionId
     * @Type string
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:38
     * @var string|null
     */
    protected $sessionId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:38
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:38
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:38
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName externalUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentity
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:38
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentity|null
     */
    protected $externalUserIdentity = null;

    /**
     * @ElementName trackingId
     * @Type string
     * @Optional
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:37
     * @MinLength 1
     * @var string|null
     */
    protected $trackingId = null;

    /**
     * @ElementName command
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand
     * @Array
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest,\CWM\BroadWorksConnector\Ocip\Models\C\OCIResponse
     * @Group 5a0dbb6ff453924acebff71a89ec0dc8:37
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[]
     */
    protected $command = [
        
    ];

    /**
     * Getter for sessionId
     *
     *
     *               The session id identifies a logged-in user. The client is responsible to ensure the uniqueness of the session id.
     *             
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionId;
    }

    /**
     * Setter for sessionId
     *
     *
     *               The session id identifies a logged-in user. The client is responsible to ensure the uniqueness of the session id.
     *             
     *
     * @param string $sessionId
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSessionId()
    {
        $this->sessionId = null;
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
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     *
     *               The user id identifies a preauthenticated user performing a session-less OCI request. The source of the request
     *               must be in the external authentication access control list.
     *             
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
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
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
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
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     *
     *               The lineport identifies a preauthenticated user performing a session-less OCI request. The source of the request must be in the external authentication access control list.
     *               The lineport may be any lineport associated with a user. 
     *               BroadSoft recommends only using this element in the rare case when the userId is not known.              
     *             
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     *
     *               The lineport identifies a preauthenticated user performing a session-less OCI request. The source of the request must be in the external authentication access control list.
     *               The lineport may be any lineport associated with a user. 
     *               BroadSoft recommends only using this element in the rare case when the userId is not known.              
     *             
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for externalUserIdentity
     *
     *
     *               The external user identity identifies a preauthenticated user/admin performing a session-less OCI request. The source of the request must have a valid CI access token.
     *             
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentity
     */
    public function getExternalUserIdentity()
    {
        return $this->externalUserIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalUserIdentity;
    }

    /**
     * Setter for externalUserIdentity
     *
     *
     *               The external user identity identifies a preauthenticated user/admin performing a session-less OCI request. The source of the request must have a valid CI access token.
     *             
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentity $externalUserIdentity
     * @return $this
     */
    public function setExternalUserIdentity(\CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentity $externalUserIdentity)
    {
        $this->externalUserIdentity = $externalUserIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalUserIdentity()
    {
        $this->externalUserIdentity = null;
        return $this;
    }

    /**
     * Getter for trackingId
     *
     *
     *        The client can send the trackingId attribute in any request and the server will return the trackingId attribute in the response.
     *        
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->trackingId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trackingId;
    }

    /**
     * Setter for trackingId
     *
     *
     *        The client can send the trackingId attribute in any request and the server will return the trackingId attribute in the response.
     *        
     *
     * @param string $trackingId
     * @return $this
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrackingId()
    {
        $this->trackingId = null;
        return $this;
    }

    /**
     * Getter for command
     *
     * List of requests or responses.
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[]
     */
    public function getCommand()
    {
        return $this->command instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->command;
    }

    /**
     * Setter for command
     *
     * List of requests or responses.
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand[] $command
     * @return $this
     */
    public function setCommand(array $command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommand()
    {
        $this->command = null;
        return $this;
    }

    /**
     * Adder for command
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand $command
     * @return $this
     */
    public function addCommand($command)
    {
        $this->command[] = $command;
        return $this;
    }
}

