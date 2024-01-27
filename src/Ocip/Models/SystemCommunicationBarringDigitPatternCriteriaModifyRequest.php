<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaModifyRequest
 *
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6132","type":"sequence"}]
 */
class SystemCommunicationBarringDigitPatternCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6132
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6132
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6132
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName addMatchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6132
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
     * @Group da582a1f8028404e70d260cf1f891033:6132
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $deleteMatchDigitPattern = [
        
    ];

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
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
}

