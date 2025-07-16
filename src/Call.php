<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * An interface for calls.
 * A call is routed to a single handler.
 * `TResult` specifies the expected handler result type.
 *
 * @api
 * @template-covariant TResult
 * @extends Message<TResult>
 */
interface Call extends Message {}
