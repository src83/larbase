<?php

/**
 * Dictionary of operation results
 * API returns a result message from api_response dictionary
 */

// EN
return [

    // Action-Based Success Messages

    'ok'          => 'Ok',
    'success'     => 'Success',

    // CRUD BASE
    'created'     => 'Record has been successfully created',
    'updated'     => 'Record has been successfully updated',
    'deleted'     => 'Record has been successfully deleted',

    // VISIBILITY / STATUS
    'published'   => 'Record has been published',
    'unpublished' => 'Record has been unpublished',
    'activated'   => 'Record has been activated',
    'deactivated' => 'Record has been deactivated',
    'enabled'     => 'Feature has been enabled',
    'disabled'    => 'Feature has been disabled',

    // CONFIRMATION / CHECK
    'checked'     => 'Check completed successfully',
    'verified'    => 'Successfully verified',
    'validated'   => 'Data has been successfully validated',
    'invalidated' => 'Data has been invalidated',
    'approved'    => 'The request has been approved',
    'rejected'    => 'The request has been rejected',

    // TRANSFER / IO
    'uploaded'    => 'File has been uploaded',
    'downloaded'  => 'File has been downloaded',
    'imported'    => 'Data has been imported',
    'exported'    => 'Data has been exported',

    // OTHER COMMON ACTIONS
    'sent'        => 'Sent',
    'received'    => 'Received',
    'synced'      => 'Synchronized',
    'attached'    => 'Attached',
    'detached'    => 'Detached',
    'assigned'    => 'Assigned',
    'unassigned'  => 'Unassigned',

    // HTTP Error Messages

    'http_error'            => 'HTTP Error',

    'bad_request'           => 'Bad Request',  // 400
    'unauthorized'          => 'Unauthenticated',  // 401
    'forbidden'             => 'Unauthorized (permission denied)',  // 403
    'item_not_found'        => 'Item not found',  // 404
    'model_not_found'       => 'Model not found',  // 404
    'not_found'             => 'Not found',  // 404
    'method_not_allowed'    => 'Method not allowed',  // 405
    'conflict'              => 'Conflict',  // 409
    'content_too_large'     => 'Content too large',  // 413
    'unprocessable_content' => 'Validation error',  // 422
    'locked'                => 'Resource locked',  // 423
    'internal_server_error' => 'Internal Server Error',  // 500

    // Error Messages by Modules (check documentation)

    'events' => [
        'bad_request'           => 'Bad Request [module: events]',  // 400
        'unauthorized'          => 'Unauthenticated [module: events]',  // 401
        'forbidden'             => 'Unauthorized (permission denied) [module: events]',  // 403
        'item_not_found'        => 'Item not found [module: events]',  // 404
        'model_not_found'       => 'Model not found [module: events]',  // 404
        'not_found'             => 'Not found [module: events]',  // 404
        'method_not_allowed'    => 'Method not allowed [module: events]',  // 405
        'conflict'              => 'Record is locked by business logic [module: events]',  // 409
        'content_too_large'     => 'Content too large [module: events]',  // 413
        'unprocessable_content' => 'Validation error [module: events]',  // 422
        'locked'                => 'Resource locked [module: events]',  // 423
        'internal_server_error' => 'Internal Server Error [module: events]',  // 500
    ],

    'test_exception' => [
        'bad_request'           => 'Bad Request [module: test_exception]',  // 400
        'unauthorized'          => 'Unauthenticated [module: test_exception]',  // 401
        'forbidden'             => 'Unauthorized (permission denied) [module: test_exception]',  // 403
        'item_not_found'        => 'Item not found [module: test_exception]',  // 404
        'model_not_found'       => 'Model not found [module: test_exception]',  // 404
        'not_found'             => 'Not found [module: test_exception]',  // 404
        'method_not_allowed'    => 'Method not allowed [module: test_exception]',  // 405
        'conflict'              => 'Conflict [module: test_exception]',  // 409
        'content_too_large'     => 'Content too large [module: test_exception]',  // 413
        'unprocessable_content' => 'Validation error [module: test_exception]',  // 422
        'locked'                => 'Resource locked [module: test_exception]',  // 423
        'internal_server_error' => 'Internal Server Error [module: test_exception]',  // 500
    ],

    'test' => [
        'bad_request'           => 'Bad Request [module: test]',  // 400
        'unauthorized'          => 'Unauthenticated [module: test]',  // 401
        'forbidden'             => 'Unauthorized (permission denied) [module: test]',  // 403
        'item_not_found'        => 'Item not found [module: test]',  // 404
        'model_not_found'       => 'Model not found [module: test]',  // 404
        'not_found'             => 'Not found [module: test]',  // 404
        'method_not_allowed'    => 'Method not allowed [module: test]',  // 405
        'conflict'              => 'Conflict [module: test]',  // 409
        'content_too_large'     => 'Content too large [module: test]',  // 413
        'unprocessable_content' => 'Validation error [module: test]',  // 422
        'locked'                => 'Resource locked [module: test]',  // 423
        'internal_server_error' => 'Internal Server Error [module: test]',  // 500
        'email_required'        => 'Email is required',
    ],

];
