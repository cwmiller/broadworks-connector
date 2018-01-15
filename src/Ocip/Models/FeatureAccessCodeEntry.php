<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FeatureAccessCodeEntry
 *
 * Feature Access Code Entry
 */
class FeatureAccessCodeEntry
{

    /**
     * @ElementName featureAccessCodeName
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName mainCode
     * @var string|null
     */
    private $mainCode = null;

    /**
     * @ElementName alternateCode
     * @var string|null
     */
    private $alternateCode = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @return string|null
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @param string|null $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * Getter for mainCode
     *
     * @ElementName mainCode
     * @return string|null
     */
    public function getMainCode()
    {
        return $this->mainCode;
    }

    /**
     * Setter for mainCode
     *
     * @ElementName mainCode
     * @param string|null $mainCode
     * @return $this
     */
    public function setMainCode($mainCode)
    {
        $this->mainCode = $mainCode;
        return $this;
    }

    /**
     * Getter for alternateCode
     *
     * @ElementName alternateCode
     * @return string|null
     */
    public function getAlternateCode()
    {
        return $this->alternateCode;
    }

    /**
     * Setter for alternateCode
     *
     * @ElementName alternateCode
     * @param string|null $alternateCode
     * @return $this
     */
    public function setAlternateCode($alternateCode)
    {
        $this->alternateCode = $alternateCode;
        return $this;
    }


}

