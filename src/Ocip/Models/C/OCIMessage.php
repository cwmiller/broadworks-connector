<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCIMessage
 *
 * A message contains a list of requests or responses. The server processes all the requests
 *         and returns a message with a corresponding list of responses.
 *
 * @Groups [{"id":"77f32f6c8e214eb5c1a80dedfce1cb56:28","type":"sequence","children":[{"id":"77f32f6c8e214eb5c1a80dedfce1cb56:29","type":"choice"}]}]
 */
class OCIMessage
{

    /**
     * @ElementName sessionId
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:29
     * @var string|null
     */
    private $sessionId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:29
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:29
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:29
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName command
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCICommand
     * @Array
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:28
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

