<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsRedirectedCallSelection21
 *
 * Redirected call selection.
 *       When " redirectedCall " is set to true, all call logs with redirected call are returned. When it
 *       set to false, all call logs without redirected call are returned.
 *       The redirected call can be defined by including a subset of Service Invocation Disposition here. 
 *       If none included, any call has a ServiceInvocationDisposition value defined in ServiceInvocationDisposition21
 *       is considered as a redirected call.
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49345","type":"sequence"}]
 */
class EnhancedCallLogsRedirectedCallSelection21
{
    /**
     * @ElementName redirectedCall
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:49345
     * @var bool|null
     */
    protected $redirectedCall = null;

    /**
     * @ElementName redirectType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:49345
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21[]
     */
    protected $redirectType = [
        
    ];

    /**
     * Getter for redirectedCall
     *
     * @return bool
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectedCall;
    }

    /**
     * Setter for redirectedCall
     *
     * @param bool $redirectedCall
     * @return $this
     */
    public function setRedirectedCall($redirectedCall)
    {
        $this->redirectedCall = $redirectedCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectedCall()
    {
        $this->redirectedCall = null;
        return $this;
    }

    /**
     * Getter for redirectType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21[]
     */
    public function getRedirectType()
    {
        return $this->redirectType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectType;
    }

    /**
     * Setter for redirectType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21[] $redirectType
     * @return $this
     */
    public function setRedirectType(array $redirectType)
    {
        $this->redirectType = $redirectType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectType()
    {
        $this->redirectType = null;
        return $this;
    }

    /**
     * Adder for redirectType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition21 $redirectType
     * @return $this
     */
    public function addRedirectType($redirectType)
    {
        $this->redirectType[] = $redirectType;
        return $this;
    }
}

