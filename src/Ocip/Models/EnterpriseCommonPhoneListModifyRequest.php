<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListModifyRequest
 *
 * Modify an entry in an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b561eca19800e0898f471e5e91eb3baa:491","type":"sequence"}]
 */
class EnterpriseCommonPhoneListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:491
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName entryName
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:491
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName newEntryName
     * @Type string
     * @Optional
     * @Group b561eca19800e0898f471e5e91eb3baa:491
     * @var string|null
     */
    private $newEntryName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group b561eca19800e0898f471e5e91eb3baa:491
     * @var string|null
     */
    private $phoneNumber = null;

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
     * Getter for entryName
     *
     * @return string
     */
    public function getEntryName()
    {
        return $this->entryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @param string $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntryName()
    {
        $this->entryName = null;
        return $this;
    }

    /**
     * Getter for newEntryName
     *
     * @return string
     */
    public function getNewEntryName()
    {
        return $this->newEntryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newEntryName;
    }

    /**
     * Setter for newEntryName
     *
     * @param string $newEntryName
     * @return $this
     */
    public function setNewEntryName($newEntryName)
    {
        $this->newEntryName = $newEntryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewEntryName()
    {
        $this->newEntryName = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
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


}

