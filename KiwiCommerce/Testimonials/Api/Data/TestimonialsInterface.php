<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace KiwiCommerce\Testimonials\Api\Data;

interface TestimonialsInterface
{

    const PROFILE_PIC = 'profile_pic';
    const UPDATED_AT = 'updated_at';
    const MESSAGE = 'message';
    const NAME = 'name';
    const POST = 'post';
    const TESTIMONIALS_ID = 'testimonials_id';
    const CREATED_AT = 'created_at';
    const COMPANY_NAME = 'company_name';
    const STATUS = 'status';

    /**
     * Get testimonials_id
     * @return string|null
     */
    public function getTestimonialsId();

    /**
     * Set testimonials_id
     * @param string $testimonialsId
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setTestimonialsId($testimonialsId);

    /**
     * Get company_name
     * @return string|null
     */
    public function getCompanyName();

    /**
     * Set company_name
     * @param string $companyName
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setCompanyName($companyName);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setName($name);

    /**
     * Get message
     * @return string|null
     */
    public function getMessage();

    /**
     * Set message
     * @param string $message
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setMessage($message);

    /**
     * Get post
     * @return string|null
     */
    public function getPost();

    /**
     * Set post
     * @param string $post
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setPost($post);

    /**
     * Get profile_pic
     * @return string|null
     */
    public function getProfilePic();

    /**
     * Set profile_pic
     * @param string $profilePic
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setProfilePic($profilePic);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setStatus($status);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \KiwiCommerce\Testimonials\Testimonials\Api\Data\TestimonialsInterface
     */
    public function setUpdatedAt($updatedAt);
}

