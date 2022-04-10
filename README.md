# DHealth Dev

## Requirements
	- PHP8 with all the plugins that laravel needs [Read More](https://laravel.com/docs/7.x#server-requirements)
	- MariaDB/MySQL

## Installation
	Linux only, i don't have a Windows machine to test
	1. Clone this repo and cd to it.
	2. Run `composer install`
	3. Run `npm install`
	4. Run `npm run dev`
	5. Duplicate `.env.example` and rename it to `.env`
	6. Run `php artisan key:generate`
	7. Edit `.env` to match your setup, especially database
	7. Run `php artisan migrate

## Running
	- Localhost
		- Run `php artisan serve`
	- Local network
		- Run `php artisan serve --host 0.0.0.0:8000`
	- Note that you need to register for an account to start testing


## What is working/not-working
### Working
	- User can input standalone items or concoctions per transaction.
	- User can check available stock, and won't be able to select the meds if it's stock is zero.
	- User cannot input more than available stock.
	- Draft inside a table.
	- Available stock is reduced when transaction is saved.
	- Basic form validation
	- Somewhat responsive pages.
### Not-Working
	- Live-stock update as meds added to draft.
	- Display printable receipts after saving transaction.
