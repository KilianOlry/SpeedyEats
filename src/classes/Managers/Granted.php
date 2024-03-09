<?php
class Granted
{
  public function notLog(): string {
    return 
      '<li class="link dropdown">
        <a href="?page=login" class="nav-item">Connexion</a>
      </li>
      <li class="link dropdown">
        <a href="?page=register" class="nav-item">Inscription</a>
      </li>
    ';
  }
  public function isLog(): string {
    return
    '<li class="link dropdown">
    <a href="" class="nav-item">Espace Personnel</a>
    <div class="dropdown-content">
    <a href="?page=order" class="dropdown-item">Mes commandes</a>
          <a href="?page=logout" class="dropdown-item">Déconnexion</a>
        </div>
        </li>
        <li class="link dropdown">
        <a href="?page=message" class="nav-item">Contactez-nous</a>
        </li>';
      }
      public function isGranted(): string {
        return
          '<li class="link dropdown">
            <a href="" class="nav-item">Administateur</a>
          <div class="dropdown-content">
            <a href="?page=dashboard-category" class="dropdown-item">Panneau Admin</a>
            <a href="?page=logout">Déconnexion</a>
          </div>
        </li>';
      }
    }
    