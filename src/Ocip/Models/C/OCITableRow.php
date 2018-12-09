<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCITableRow
 *
 * The OCITableRow type is used in responses only, never in requests. It occurs
 *         inside the OCITable type. The OCITableRow consists columns of strings.
 *         Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns. See the OCITable data type
 *         for more information.
 *
 * @Groups [{"id":"b5c92103b335c0ad3e7b255e39a5cba4:261","type":"sequence"}]
 */
class OCITableRow
{

    /**
     * @ElementName col
     * @Type string
     * @Array
     * @Group b5c92103b335c0ad3e7b255e39a5cba4:261
     * @var string[]
     */
    private $col = array(
        
    );

    /**
     * Getter for col
     *
     * @return string[]
     */
    public function getCol()
    {
        return $this->col instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->col;
    }

    /**
     * Setter for col
     *
     * @param string[] $col
     * @return $this
     */
    public function setCol(array $col)
    {
        $this->col = $col;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCol()
    {
        $this->col = null;
        return $this;
    }

    /**
     * Adder for col
     *
     * @param string $col
     * @return $this
     */
    public function addCol(string $col)
    {
        $this->col[] = $col;
        return $this;
    }


}

