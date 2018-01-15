<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest
 *
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

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
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function setAddMatchDigitPattern($addMatchDigitPattern)
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
    public function addAddMatchDigitPattern($addMatchDigitPattern)
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
    public function setDeleteMatchDigitPattern($deleteMatchDigitPattern)
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
    public function addDeleteMatchDigitPattern($deleteMatchDigitPattern)
    {
        $this->deleteMatchDigitPattern []= $deleteMatchDigitPattern;
        return $this;
    }


}

