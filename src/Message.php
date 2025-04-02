<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * A marker interface for messages. For queries, `TResult` specifies the expected handler result type.
 *
 * @api
 * @template-covariant TResult = null
 */
interface Message {}
