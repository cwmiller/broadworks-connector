<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCITableRow
 *
 * The OCITableRow type is used in responses only, never in requests. It occurs
 *         inside the OCITable type. The OCITableRow consists columns of strings.
 *         Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns. See the OCITable data
 * type
 *         for more information.
 */
class OCITableRow
{

    /**
     * @ElementName col
     * @var string[]
     */
    private $col = array(
        
    );

    /**
     * Getter for col
     *
     * @ElementName col
     * @return string[]
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * Setter for col
     *
     * @ElementName col
     * @param string[] $col
     * @return $this
     */
    public function setCol($col)
    {
        $this->col = $col;
        return $this;
    }

    /**
     * Adder for col
     *
     * @ElementName col
     * @param string $col
     * @return $this
     */
    public function addCol($col)
    {
        $this->col []= $col;
        return $this;
    }


}

