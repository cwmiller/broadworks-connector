<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LDAPEntryField
 *
 * One name value pair for a LDAP entry.
 *
 * @Groups [{"id":"71d62705f0bdec15169e7cf0a3eff281:33","type":"sequence"}]
 */
class LDAPEntryField
{

    /**
     * @ElementName attributeName
     * @Type string
     * @Group 71d62705f0bdec15169e7cf0a3eff281:33
     * @var string|null
     */
    private $attributeName = null;

    /**
     * @ElementName attributeValue
     * @Type string
     * @Optional
     * @Group 71d62705f0bdec15169e7cf0a3eff281:33
     * @var string|null
     */
    private $attributeValue = null;

    /**
     * Getter for attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attributeName;
    }

    /**
     * Setter for attributeName
     *
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttributeName()
    {
        $this->attributeName = null;
        return $this;
    }

    /**
     * Getter for attributeValue
     *
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->attributeValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attributeValue;
    }

    /**
     * Setter for attributeValue
     *
     * @param string $attributeValue
     * @return $this
     */
    public function setAttributeValue($attributeValue)
    {
        $this->attributeValue = $attributeValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttributeValue()
    {
        $this->attributeValue = null;
        return $this;
    }


}

