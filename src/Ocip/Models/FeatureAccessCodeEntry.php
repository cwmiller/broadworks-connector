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
     * @Type string
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName mainCode
     * @Type string
     * @var string|null
     */
    private $mainCode = null;

    /**
     * @ElementName alternateCode
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateCode = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @return string
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @param string $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeName()
    {
        $this->featureAccessCodeName = null;
        return $this;
    }

    /**
     * Getter for mainCode
     *
     * @return string
     */
    public function getMainCode()
    {
        return $this->mainCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mainCode;
    }

    /**
     * Setter for mainCode
     *
     * @param string $mainCode
     * @return $this
     */
    public function setMainCode($mainCode)
    {
        $this->mainCode = $mainCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMainCode()
    {
        $this->mainCode = null;
        return $this;
    }

    /**
     * Getter for alternateCode
     *
     * @return string|null
     */
    public function getAlternateCode()
    {
        return $this->alternateCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCode;
    }

    /**
     * Setter for alternateCode
     *
     * @param string|null $alternateCode
     * @return $this
     */
    public function setAlternateCode($alternateCode)
    {
        if ($alternateCode === null) {
            $this->alternateCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alternateCode = $alternateCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCode()
    {
        $this->alternateCode = null;
        return $this;
    }


}

