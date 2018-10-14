<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderSessionAdmissionControlWhiteListModifyRequest
 *
 * Modify the Service Provider Session Admission Control White List information.
 *         The number of digit pattern entries is limited to 100.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderSessionAdmissionControlWhiteListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName addMatchDigitPattern
     * @var string[]
     */
    private $addMatchDigitPattern = array(
        
    );

    /**
     * @ElementName deleteMatchDigitPattern
     * @var string[]
     */
    private $deleteMatchDigitPattern = array(
        
    );

    /**
     * @ElementName enableWhiteList
     * @var bool|null
     */
    private $enableWhiteList = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for addMatchDigitPattern
     *
     * @ElementName addMatchDigitPattern
     * @return string[]
     */
    public function getAddMatchDigitPattern()
    {
        return $this->addMatchDigitPattern;
    }

    /**
     * Setter for addMatchDigitPattern
     *
     * @ElementName addMatchDigitPattern
     * @param string[] $addMatchDigitPattern
     * @return $this
     */
    public function setAddMatchDigitPattern(array $addMatchDigitPattern)
    {
        $this->addMatchDigitPattern = $addMatchDigitPattern;
        return $this;
    }

    /**
     * Adder for addMatchDigitPattern
     *
     * @ElementName addMatchDigitPattern
     * @param string $addMatchDigitPattern
     * @return $this
     */
    public function addAddMatchDigitPattern(string $addMatchDigitPattern)
    {
        $this->addMatchDigitPattern []= $addMatchDigitPattern;
        return $this;
    }

    /**
     * Getter for deleteMatchDigitPattern
     *
     * @ElementName deleteMatchDigitPattern
     * @return string[]
     */
    public function getDeleteMatchDigitPattern()
    {
        return $this->deleteMatchDigitPattern;
    }

    /**
     * Setter for deleteMatchDigitPattern
     *
     * @ElementName deleteMatchDigitPattern
     * @param string[] $deleteMatchDigitPattern
     * @return $this
     */
    public function setDeleteMatchDigitPattern(array $deleteMatchDigitPattern)
    {
        $this->deleteMatchDigitPattern = $deleteMatchDigitPattern;
        return $this;
    }

    /**
     * Adder for deleteMatchDigitPattern
     *
     * @ElementName deleteMatchDigitPattern
     * @param string $deleteMatchDigitPattern
     * @return $this
     */
    public function addDeleteMatchDigitPattern(string $deleteMatchDigitPattern)
    {
        $this->deleteMatchDigitPattern []= $deleteMatchDigitPattern;
        return $this;
    }

    /**
     * Getter for enableWhiteList
     *
     * @ElementName enableWhiteList
     * @return bool|null
     */
    public function getEnableWhiteList()
    {
        return $this->enableWhiteList;
    }

    /**
     * Setter for enableWhiteList
     *
     * @ElementName enableWhiteList
     * @param bool|null $enableWhiteList
     * @return $this
     */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->enableWhiteList = $enableWhiteList;
        return $this;
    }


}

