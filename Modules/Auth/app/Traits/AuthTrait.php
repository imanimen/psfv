<?php

namespace Modules\Auth\Traits;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

trait AuthTrait
{
    /**
     * Generate JWT token for user
     *
     * @param array $customClaims
     * @return string
     */
    protected function generateToken(array $customClaims = []): string
    {
        $payload = JWTFactory::make($customClaims);
        return JWTAuth::encode($payload)->get();
    }

    /**
     * Get authenticated user from token
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    protected function getAuthenticatedUser()
    {
        try {
            return JWTAuth::parseToken()->authenticate();
        } catch (TokenExpiredException $e) {
            return null;
        } catch (TokenInvalidException $e) {
            return null;
        } catch (JWTException $e) {
            return null;
        }
    }

    /**
     * Invalidate token
     *
     * @return bool
     */
    protected function invalidateToken(): bool
    {
        try {
            JWTAuth::parseToken()->invalidate();
            return true;
        } catch (JWTException $e) {
            return false;
        }
    }

    /**
     * Refresh token
     *
     * @return string|null
     */
    protected function refreshToken(): ?string
    {
        try {
            return JWTAuth::parseToken()->refresh();
        } catch (JWTException $e) {
            return null;
        }
    }

    /**
     * Get token from request
     *
     * @return string|null
     */
    protected function getToken(): ?string
    {
        return JWTAuth::getToken();
    }
}
