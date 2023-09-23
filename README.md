# Administration in new tab by GHSVS.de (mod_administratorlinkghsvs for Joomla 4)

## Description (en)
- Joomla 4/5 module. Backend button to open an additional administration in a new browser tabulator.
- In Joomla 4 the <code>Administration</code> link has been removed from the <code>User Status</code> module without replacement. It made it possible to open an additional backend in a NEW browser tabulator FROM EVERYWHERE, also in edit forms.

## Description (de)
- Joomla-4/5-Modul. Backend-Button zum Öffnen einer zusätzlichen Joomla-Administration in einem neuen Browser-Tabulator.
- In Joomla 4 wurde der <code>Administration</code>-Link aus dem <code>Benutzerstatus</code>-Modul ersatzlos entfernt. Damit war es unter Joomla 3 möglich, ein zusätzliches Backend in einem NEUEN Browsertabulator VON ÜBERALL aus zu öffnen, auch in Bearbeitungsformularen.

## Usage
![Positions and Layouts](mod_administratorlinkghsvs_Positions.jpg?raw=true "Positions and Layouts")

## Usage (en)
- Install the module (https://github.com/GHSVS-de/mod_administratorlinkghsvs/releases).
- - Alternative download location: https://extensions.joomla.org/extension/administration/admin-navigation/administration-in-new-tab-by-ghsvs-de/
- Create a new **Administrator** module of type <code>Administration in new tab by GHSVS.de</code>.
- If you want to publish it in module position <code>status</code> select <code>Layout</code> <code>status</code>. You will see a house icon with a nearly unreadable label (Not my fault. That's modern.) <code>Administration</code> in the status bar of Joomla's backend template.
- The standard <code>Layout</code> <code>default</code> displays a simple blue <code>Bootstrap</code> button. I use this variant in positions <code>top</code> and/or <code>bottom</code>.

## Usage (de)
- Installieren Sie das Modul (https://github.com/GHSVS-de/mod_administratorlinkghsvs/releases).
- - Alternativer Download: https://extensions.joomla.org/extension/administration/admin-navigation/administration-in-new-tab-by-ghsvs-de/
- Legen Sie ein neues **Administrator**-Modul vom Typ <code>Administration in new tab by GHSVS.de</code> an.
- Wenn Sie es in der Modulposition <code>Status</code> veröffentlichen wollen, wählen Sie <code>Layout</code> <code>Status</code>. Sie sehen dann in der Statusleiste des Backend-Templates von Joomla ein Haussymbol mit einer fast unleserlichen Beschriftung (Nicht meine Schuld, das ist modern.) <code>Administration</code>.
- Das Standard-<code>Layout</code> <code>default</code> zeigt eine einfache blaue <code>Bootstrap</code>-Schaltfläche an. Ich verwende diese Variante an den Positionen <code>top</code> und/oder <code>bottom</code>.

-----------------------------------------------------

# My personal build procedure (WSL 1, Debian, Win 10)

**@since v2022.06.24: Build procedure uses local repo fork of https://github.com/GHSVS-de/buildKramGhsvs**

- Prepare/adapt `./package.json`.
- `cd /mnt/z/git-kram/mod_administratorlinkghsvs`

## node/npm updates/installation
- `npm run updateCheck` or (faster) `npm outdated`
- `npm run update` (if needed) or (faster) `npm update --save-dev`
- `npm install` (if needed)

## PHP Codestyle
If you think it's worth it.
- `cd /mnt/z/git-kram/php-cs-fixer-ghsvs`
- `npm run mod_administratorlinkghsvsDry` (= dry test run).
- `npm run mod_administratorlinkghsvs` (= cleans code).
- `cd /mnt/z/git-kram/mod_administratorlinkghsvs` (back to this repo).

## Build installable ZIP package
- `node build.js`
- New, installable ZIP is in `./dist` afterwards.
- All packed files for this ZIP can be seen in `./package`. **But only if you disable deletion of this folder at the end of `build.js`**.

### For Joomla update and changelog server
- Create new release with new tag.
  - See release description in `dist/release.txt`.
- Extracts(!) of the update and changelog XML for update and changelog servers are in `./dist` as well. Copy/paste and necessary additions.
