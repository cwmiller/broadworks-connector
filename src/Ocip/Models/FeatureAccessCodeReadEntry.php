<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FeatureAccessCodeReadEntry
 *
 * Feature Access Code Entry to be used in all GET commands.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2359","type":"sequence"}]
 */
class FeatureAccessCodeReadEntry
{

    /**
     * @ElementName featureAccessCodeName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2359
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName mainCode
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2359
     * @var string|null
     */
    private $mainCode = null;

    /**
     * @ElementName alternateCode
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2359
     * @var string|null
     */
    private $alternateCode = null;

    /**
     * @ElementName enableFAC
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2359
     * @var bool|null
     */
    private $enableFAC = null;

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
     * @return string
     */
    public function getAlternateCode()
    {
        return $this->alternateCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCode;
    }

    /**
     * Setter for alternateCode
     *
     * @param string $alternateCode
     * @return $this
     */
    public function setAlternateCode($alternateCode)
    {
        $this->alternateCode = $alternateCode;
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

    /**
     * Getter for enableFAC
     *
     * @return bool
     */
    public function getEnableFAC()
    {
        return $this->enableFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @param bool $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFAC()
    {
        $this->enableFAC = null;
        return $this;
    }


}

