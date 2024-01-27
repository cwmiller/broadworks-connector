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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6796","type":"sequence"}]
 */
class ServiceProviderSessionAdmissionControlWhiteListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6796
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName addMatchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6796
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $addMatchDigitPattern = [
        
    ];

    /**
     * @ElementName deleteMatchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6796
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $deleteMatchDigitPattern = [
        
    ];

    /**
     * @ElementName enableWhiteList
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6796
     * @var bool|null
     */
    protected $enableWhiteList = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for addMatchDigitPattern
     *
     * @return string[]
     */
    public function getAddMatchDigitPattern()
    {
        return $this->addMatchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addMatchDigitPattern;
    }

    /**
     * Setter for addMatchDigitPattern
     *
     * @param string[] $addMatchDigitPattern
     * @return $this
     */
    public function setAddMatchDigitPattern(array $addMatchDigitPattern)
    {
        $this->addMatchDigitPattern = $addMatchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddMatchDigitPattern()
    {
        $this->addMatchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for addMatchDigitPattern
     *
     * @param string $addMatchDigitPattern
     * @return $this
     */
    public function addAddMatchDigitPattern(string $addMatchDigitPattern)
    {
        $this->addMatchDigitPattern[] = $addMatchDigitPattern;
        return $this;
    }

    /**
     * Getter for deleteMatchDigitPattern
     *
     * @return string[]
     */
    public function getDeleteMatchDigitPattern()
    {
        return $this->deleteMatchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteMatchDigitPattern;
    }

    /**
     * Setter for deleteMatchDigitPattern
     *
     * @param string[] $deleteMatchDigitPattern
     * @return $this
     */
    public function setDeleteMatchDigitPattern(array $deleteMatchDigitPattern)
    {
        $this->deleteMatchDigitPattern = $deleteMatchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteMatchDigitPattern()
    {
        $this->deleteMatchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for deleteMatchDigitPattern
     *
     * @param string $deleteMatchDigitPattern
     * @return $this
     */
    public function addDeleteMatchDigitPattern(string $deleteMatchDigitPattern)
    {
        $this->deleteMatchDigitPattern[] = $deleteMatchDigitPattern;
        return $this;
    }

    /**
     * Getter for enableWhiteList
     *
     * @return bool
     */
    public function getEnableWhiteList()
    {
        return $this->enableWhiteList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableWhiteList;
    }

    /**
     * Setter for enableWhiteList
     *
     * @param bool $enableWhiteList
     * @return $this
     */
    public function setEnableWhiteList($enableWhiteList)
    {
        $this->enableWhiteList = $enableWhiteList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableWhiteList()
    {
        $this->enableWhiteList = null;
        return $this;
    }
}

