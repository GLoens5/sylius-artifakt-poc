<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Differ;

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
interface DifferInterface
{
    /**
     * Create diff.
     * @param string $old
     * @param string $new
     * @param \SplFileInfo|null $file
     */
    public function diff($old, $new, $file = null) : string;
}
