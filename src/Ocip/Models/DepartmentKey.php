<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DepartmentKey
 *
 * Uniquely identifies a department system-wide.
 *         Departments are contained in either an enterprise or a group. Enterprise
 * departments can be
 *         used by any or all groups within the enterprise. Department names are
 * unique within a group and
 *         within an enterprise, but the same department name can exist in 2
 * different groups or in both
 *         a group and its parent enterprise. Therefore, to uniquely identify a
 * department, we must know
 *         the department name and which enterprise or group contains the
 * department.
 *         This type is extended by group and enterprise department keys.
 */
abstract class DepartmentKey
{


}

