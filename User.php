<?php
class User
{
    public string $name;
    public string $surname;
    public string $username;
    
    protected bool $is_admin = false;

    public function __construct(string $name, string $surname, string $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin(): bool
    {
        return $this->is_admin;
    }

    public function whoAmI(): void
    {
        $result = $this->name . ' ' . $this->surname;
        if($this->is_admin)
        {
            $result .= ' (admin)';
        }
        echo $result . PHP_EOL;
    }
}
?>