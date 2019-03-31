<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementSIPAliasList
 *
 * A list of SIP aliases that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3366","type":"sequence"}]
 */
class ReplacementSIPAliasList
{

    /**
     * @ElementName sipAlias
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3366
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $sipAlias = array(
        
    );

    /**
     * Getter for sipAlias
     *
     * @return string[]
     */
    public function getSipAlias()
    {
        return $this->sipAlias instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAlias;
    }

    /**
     * Setter for sipAlias
     *
     * @param string[] $sipAlias
     * @return $this
     */
    public function setSipAlias(array $sipAlias)
    {
        $this->sipAlias = $sipAlias;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAlias()
    {
        $this->sipAlias = null;
        return $this;
    }

    /**
     * Adder for sipAlias
     *
     * @param string $sipAlias
     * @return $this
     */
    public function addSipAlias(string $sipAlias)
    {
        $this->sipAlias[] = $sipAlias;
        return $this;
    }


}

