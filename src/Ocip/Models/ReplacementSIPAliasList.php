<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementSIPAliasList
 *
 * A list of SIP aliases that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementSIPAliasList
{

    /**
     * @ElementName sipAlias
     * @var string[]
     */
    private $sipAlias = array(
        
    );

    /**
     * Getter for sipAlias
     *
     * @ElementName sipAlias
     * @return string[]
     */
    public function getSipAlias()
    {
        return $this->sipAlias;
    }

    /**
     * Setter for sipAlias
     *
     * @ElementName sipAlias
     * @param string[] $sipAlias
     * @return $this
     */
    public function setSipAlias(array $sipAlias)
    {
        $this->sipAlias = $sipAlias;
        return $this;
    }

    /**
     * Adder for sipAlias
     *
     * @ElementName sipAlias
     * @param string $sipAlias
     * @return $this
     */
    public function addSipAlias(string $sipAlias)
    {
        $this->sipAlias []= $sipAlias;
        return $this;
    }


}

