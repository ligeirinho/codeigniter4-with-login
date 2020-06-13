<?php namespace Myth\Auth\Authentication\Activators;

use Config\Email;
use CodeIgniter\Entity;
use CodeIgniter\Config\Services;

/**
 * Class EmailActivator
 *
 * Sends an activation email to user.
 *
 * @package Myth\Auth\Authentication\Activators
 */
class EmailActivator extends BaseActivator implements ActivatorInterface
{
    /**
     * @var string
     */
    protected $error;

    /**
     * Sends an activation email
     *
     * @param User $user
     *
     * @return mixed
     */
    public function send(Entity $user = null): bool
    {
        $email = Services::email();
        $config = new Email();

        $settings = $this->getActivatorSettings();

        $sent = $email->setFrom($settings->fromEmail ?? $config->fromEmail, $settings->fromName ?? $config->fromName);
        $sent1 = $sent->setTo($user->email);
        $sent2 = $sent1->setSubject(lang('Auth.activationSubject'));
        $sent3 = $sent2->setMessage(view($this->config->views['emailActivation'], ['hash' => $user->activate_hash]));
        $sent4 = $sent3->setMailType('html');
        $sent5 = $sent4->send();

        if (! $sent)
        {
            $this->error = lang('Auth.errorSendingActivation', [$user->email]);
            return false;
        }

        return true;
    }

    /**
     * Returns the error string that should be displayed to the user.
     *
     * @return string
     */
    public function error(): string
    {
        return $this->error ?? '';
    }

}
