{ pkgs ? import <nixpkgs> {} }:
  pkgs.mkShell {
    nativeBuildInputs = [
      pkgs.php82
      pkgs.php82Packages.composer
      pkgs.nodejs
    ];
}
