<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LDAPEntryField
 *
 * One name value pair for a LDAP entry.
 */
class LDAPEntryField
{

    /**
     * @ElementName attributeName
     * @var string|null
     */
    private $attributeName = null;

    /**
     * @ElementName attributeValue
     * @var string|null
     */
    private $attributeValue = null;

    /**
     * Getter for attributeName
     *
     * @ElementName attributeName
     * @return string|null
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Setter for attributeName
     *
     * @ElementName attributeName
     * @param string|null $attributeName
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        return $this;
    }

    /**
     * Getter for attributeValue
     *
     * @ElementName attributeValue
     * @return string|null
     */
    public function getAttributeValue()
    {
        return $this->attributeValue;
    }

    /**
     * Setter for attributeValue
     *
     * @ElementName attributeValue
     * @param string|null $attributeValue
     * @return $this
     */
    public function setAttributeValue($attributeValue)
    {
        $this->attributeValue = $attributeValue;
        return $this;
    }


}

