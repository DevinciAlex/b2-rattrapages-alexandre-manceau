<?php

class User {
  private string $Firstname;
  private string $Lastname;
  private string $Address;
  private string $City;
  private string $State;
  private string $Email;
  private int $Price;
  private string $Status;

  public function __construct(string $Firstname, string $Lastname, string $Address, string $City, string $State, string $Email, int $Price,  string $Status) {
    $this->Firstname = $Firstname;
    $this->Lastname = $Lastname;
    $this->Address = $Address;
    $this->City = $City;
    $this->State = $State;
    $this->Email = $Email;
    $this->Price = $Price;
    $this->Status = $Status;
  }

  public function setFirstname(string $Firstname) : self
  {
   $this->Firstname = $Firstname;
   return $this;
  }

  public function getFirstname() : string
  {
    return $this->Firstname;
  }

  public function setLastname(string $Lastname) : self
  {
    $this->Lastname = $Lastname;
    return $this;
  }

  public function getLastname() : string
  {
    return $this->Lastname;
  }

  public function setAddress(string $Address) : self
   {
    $this->Address = $Address;
    return $this;
  }

  public function getAddress()  : string
  {
    return $this->Address;
  }

  public function setCity(string $City) : self
  {
    $this->City = $City;
    return $this;
  }

  public function getCity() : string
  {
    return $this->City;
  }

  public function setState(string $State) : self
  {
    $this->State = $State;
    return $this;
  }

  public function getState() : string
  {
    return $this->State;
  }

  public function setEmail(string $Email) : self
  {
    $this->Email = $Email;
    return $this;
  }

  public function getEmail() : string
  {
    return $this->Email;
  }
   public function getPrice() : int
  {
    return $this->Price;
  }
  public function setPrice(int $Price) : self
  {
    $this->Price = $Price;
    return $this;
  }

   public function setStatus(string $Status): self
  {
    $this->Status = $Status;
    return $this;
  }

  public function getStatus(): string
  {
    return $this->Status;
  }
}

?>