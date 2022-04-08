<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Signa;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
	 * @return void
	 */
	public function up()
	{
		$data = array (
			0 => 
			array (
				'codename' => '000.5 T',
				'name' => '1X SEHARI 0.5 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1 => 
			array (
				'codename' => '000.5 T AC',
				'name' => '1X SEHARI 0.5 TABLET, SEBELUM MAKAN (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2 => 
			array (
				'codename' => '5DD2C',
				'name' => '5X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			3 => 
			array (
				'codename' => 'BSK',
				'name' => 'BILA SAKIT KEPALA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			4 => 
			array (
				'codename' => '1DD1S',
				'name' => '1X SEHARI 1 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			5 => 
			array (
				'codename' => '1DD3G OD',
				'name' => '1X SEHARI 3 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			6 => 
			array (
				'codename' => '1DD4ML',
				'name' => '1X SEHARI 4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			7 => 
			array (
				'codename' => '1DD3S',
				'name' => '1X SEHARI 3 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			8 => 
			array (
				'codename' => '1DD5I',
				'name' => '1X SEHARI 5 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			9 => 
			array (
				'codename' => '1DD6ML',
				'name' => '1X SEHARI 6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			10 => 
			array (
				'codename' => '1DD6T PC',
				'name' => '1X SEHARI 6 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			11 => 
			array (
				'codename' => '23DDO',
				'name' => 'OLESKAN 2-3X SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			12 => 
			array (
				'codename' => '2DD2C',
				'name' => '2X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			13 => 
			array (
				'codename' => '2DD4C',
				'name' => '2X SEHARI 4 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			14 => 
			array (
				'codename' => '2DD8ML',
				'name' => '2X SEHARI 8 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			15 => 
			array (
				'codename' => '2DD4G MI',
				'name' => '2X SEHARI 4 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			16 => 
			array (
				'codename' => '2DD2G MI',
				'name' => '2X SEHARI 2 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			17 => 
			array (
				'codename' => '2DDO',
				'name' => 'OLESKAN 2X SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			18 => 
			array (
				'codename' => '2DD5T',
				'name' => '2X SEHARI 5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			19 => 
			array (
				'codename' => '2DD6T',
				'name' => '2X SEHARI 6 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			20 => 
			array (
				'codename' => '3DD0.25T',
				'name' => '3X SEHARI 0.25 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			21 => 
			array (
				'codename' => '3DD3C',
				'name' => '3X SEHARI 3 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			22 => 
			array (
				'codename' => '1W2T',
				'name' => '1X SEMINGGU 2 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			23 => 
			array (
				'codename' => '4DD0.25T AC',
				'name' => '4X SEHARI 0.25 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			24 => 
			array (
				'codename' => '4DD3ML',
				'name' => '4X SEHARI 3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			25 => 
			array (
				'codename' => '4DD7.5ML',
				'name' => '4X SEHARI 7.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			26 => 
			array (
				'codename' => '4DD7ML',
				'name' => '4X SEHARI 7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			27 => 
			array (
				'codename' => '6DD0.5T',
				'name' => '6X SEHARI 0.5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			28 => 
			array (
				'codename' => '4DD6T',
				'name' => '4X SEHARI 6 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			29 => 
			array (
				'codename' => '5DD1.25ML',
				'name' => '5X SEHARI 1.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			30 => 
			array (
				'codename' => '5DD5ML',
				'name' => '5X SEHARI 5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			31 => 
			array (
				'codename' => 'OL ',
				'name' => 'OLESKAN PADA KULIT',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			32 => 
			array (
				'codename' => '3DD5ML',
				'name' => '3X SEHARI 5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			33 => 
			array (
				'codename' => '6DD3ML',
				'name' => '6X SEHARI 3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			34 => 
			array (
				'codename' => '6DD1T',
				'name' => '6X SEHARI 1 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			35 => 
			array (
				'codename' => '6DD4ML',
				'name' => '6X SEHARI 4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			36 => 
			array (
				'codename' => '101 C',
				'name' => '2X SEHARI 1 KAPSUL (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			37 => 
			array (
				'codename' => '101 C AC',
				'name' => '2X SEHARI 1 KAPSUL, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			38 => 
			array (
				'codename' => '101 C PC',
				'name' => '2X SEHARI 1 KAPSUL, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			39 => 
			array (
				'codename' => '101 T AC',
				'name' => '2X SEHARI 1 TABLET, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			40 => 
			array (
				'codename' => '101 T PC',
				'name' => '2X SEHARI 1 TABLET, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			41 => 
			array (
				'codename' => '110 C',
				'name' => '2X SEHARI 1 KAPSUL (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			42 => 
			array (
				'codename' => '110 C AC',
				'name' => '2X SEHARI 1 KAPSUL, SEBELUM MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			43 => 
			array (
				'codename' => '110 C PC',
				'name' => '2X SEHARI 1 KAPSUL, SETELAH MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			44 => 
			array (
				'codename' => '110 S',
				'name' => '2X SEHARI 1 SEMPROT (INHALASI) (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			45 => 
			array (
				'codename' => '110 T',
				'name' => '2X SEHARI 1 TABLET (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			46 => 
			array (
				'codename' => '110 T AC',
				'name' => '2X SEHARI 1 TABLET, SEBELUM MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			47 => 
			array (
				'codename' => '110 T PC',
				'name' => '2X SEHARI 1 TABLET, SETELAH MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			48 => 
			array (
				'codename' => '3DD2T',
				'name' => '3X SEHARI 2 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			49 => 
			array (
				'codename' => '5DD2T',
				'name' => '5X SEHARI 2 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			50 => 
			array (
				'codename' => '5DD2T AC',
				'name' => '5X SEHARI 2 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			51 => 
			array (
				'codename' => '5DD2T PC',
				'name' => '5X SEHARI 2 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			52 => 
			array (
				'codename' => '5DD30ML',
				'name' => '5X SEHARI 30 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			53 => 
			array (
				'codename' => '5DD30ML AC',
				'name' => '5X SEHARI 30 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			54 => 
			array (
				'codename' => '5DD30ML PC',
				'name' => '5X SEHARI 30 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			55 => 
			array (
				'codename' => '5DD3C',
				'name' => '5X SEHARI 3 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			56 => 
			array (
				'codename' => '0-00.5 C PC',
				'name' => '1X SEHARI 0.5 KAPSUL, SETELAH MAKAN (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			57 => 
			array (
				'codename' => '3DD6I',
				'name' => '3X SEHARI 6 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			58 => 
			array (
				'codename' => '020 C PC',
				'name' => '1X SEHARI 2 KAPSUL, SETELAH MAKAN (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			59 => 
			array (
				'codename' => '1DD0.25T PC',
				'name' => '1X SEHARI 0.25 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			60 => 
			array (
				'codename' => '1DD0.25T S',
				'name' => '1X SEHARI 0.25 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			61 => 
			array (
				'codename' => '020 S',
				'name' => '1X SEHARI 2 SEMPROT (INHALASI) (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			62 => 
			array (
				'codename' => '5DD25ML PC',
				'name' => '5X SEHARI 25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			63 => 
			array (
				'codename' => '020 T',
				'name' => '1X SEHARI 2 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			64 => 
			array (
				'codename' => '020 T AC',
				'name' => '1X SEHARI 2 TABLET, SEBELUM MAKAN (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			65 => 
			array (
				'codename' => '5DD2G ND',
				'name' => '5X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			66 => 
			array (
				'codename' => '5DD2G NDS',
				'name' => '5X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			67 => 
			array (
				'codename' => '5DD2G NS',
				'name' => '5X SEHARI 2 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			68 => 
			array (
				'codename' => '5DD2G OD',
				'name' => '5X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			69 => 
			array (
				'codename' => '5DD2G ODS',
				'name' => '5X SEHARI 2 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			70 => 
			array (
				'codename' => '5DD2G OS',
				'name' => '5X SEHARI 2 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			71 => 
			array (
				'codename' => '5DD2ML AC',
				'name' => '5X SEHARI 2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			72 => 
			array (
				'codename' => '1DD0.2ML AC',
				'name' => '1X SEHARI 0.2 ML (SEBELUM MAKAN) ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			73 => 
			array (
				'codename' => '020 T PC',
				'name' => '1X SEHARI 2 TABLET, SETELAH MAKAN (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			74 => 
			array (
				'codename' => '1DD1SUP',
				'name' => '1X SEHARI 1 SUPPOSITORIA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			75 => 
			array (
				'codename' => '022 C',
				'name' => '2X SEHARI 2 KAPSUL (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			76 => 
			array (
				'codename' => '022 C AC',
				'name' => '2X SEHARI 2 KAPSUL, SEBELUM MAKAN (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			77 => 
			array (
				'codename' => '022 C PC',
				'name' => '2X SEHARI 2 KAPSUL, SETELAH MAKAN (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			78 => 
			array (
				'codename' => '022 S',
				'name' => '2X SEHARI 2 SEMPROT (INHALASI) (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			79 => 
			array (
				'codename' => '022 T',
				'name' => '2X SEHARI 2 TABLET (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			80 => 
			array (
				'codename' => '022 T AC',
				'name' => '2X SEHARI 2 TABLET, SEBELUM MAKAN (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			81 => 
			array (
				'codename' => '022 T PC',
				'name' => '2X SEHARI 2 TABLET, SETELAH MAKAN (SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			82 => 
			array (
				'codename' => '3DDOL C',
				'name' => 'OLESKAN KRIM 3X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			83 => 
			array (
				'codename' => '0.500 C',
				'name' => '1X SEHARI 0.5 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			84 => 
			array (
				'codename' => '0.500 C AC',
				'name' => '1X SEHARI 0.5 KAPSUL, SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			85 => 
			array (
				'codename' => '0.500 C PC',
				'name' => '1X SEHARI 0.5 KAPSUL, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			86 => 
			array (
				'codename' => '0.500 T',
				'name' => '1X SEHARI 0.5 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			87 => 
			array (
				'codename' => '1DD2T P',
				'name' => '1X SEHARI 2 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			88 => 
			array (
				'codename' => '1DD30ML AC',
				'name' => '1X SEHARI 30 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			89 => 
			array (
				'codename' => '1DD6G NS',
				'name' => '1X SEHARI 6 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			90 => 
			array (
				'codename' => '220 C AC',
				'name' => '2X SEHARI 2 KAPSUL, SEBELUM MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			91 => 
			array (
				'codename' => '2DD0.7ML AC',
				'name' => '2X SEHARI 0.7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			92 => 
			array (
				'codename' => '2DD0.8ML',
				'name' => '2X SEHARI 0.8 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			93 => 
			array (
				'codename' => '2DD6ML AC',
				'name' => '2X SEHARI 6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			94 => 
			array (
				'codename' => '3DD1ML',
				'name' => '3X SEHARI 1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			95 => 
			array (
				'codename' => '3DD25ML',
				'name' => '3X SEHARI 25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			96 => 
			array (
				'codename' => '3DD6B',
				'name' => '3X SEHARI 6 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			97 => 
			array (
				'codename' => '3DD0.25T AC',
				'name' => '3X SEHARI 0.25 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			98 => 
			array (
				'codename' => '3DD6T',
				'name' => '3X SEHARI 6 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			99 => 
			array (
				'codename' => '5DD15ML PC',
				'name' => '5X SEHARI 15 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			100 => 
			array (
				'codename' => '4DD2C PC',
				'name' => '4X SEHARI 2 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			101 => 
			array (
				'codename' => '5DD0.25T PC',
				'name' => '5X SEHARI 0.25 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			102 => 
			array (
				'codename' => '6DD2G OD',
				'name' => '6X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			103 => 
			array (
				'codename' => '5DD3T PC',
				'name' => '5X SEHARI 3 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			104 => 
			array (
				'codename' => '6DD5T',
				'name' => '6X SEHARI 5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			105 => 
			array (
				'codename' => '5DD6ML AC',
				'name' => '5X SEHARI 6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			106 => 
			array (
				'codename' => '2DD1I',
				'name' => '2X SEHARI 1 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			107 => 
			array (
				'codename' => '111 C',
				'name' => '3X SEHARI 1 KAPSUL (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			108 => 
			array (
				'codename' => '111 C AC',
				'name' => '3X SEHARI 1 KAPSUL, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			109 => 
			array (
				'codename' => '6DD30ML AC',
				'name' => '6X SEHARI 30 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			110 => 
			array (
				'codename' => '6DD30ML PC',
				'name' => '6X SEHARI 30 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			111 => 
			array (
				'codename' => '111 C PC',
				'name' => '3X SEHARI 1 KAPSUL, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			112 => 
			array (
				'codename' => '111 S',
				'name' => '3X SEHARI 1 SEMPROT (INHALASI) (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			113 => 
			array (
				'codename' => '111 T',
				'name' => '3X SEHARI 1 TABLET (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			114 => 
			array (
				'codename' => '111 T AC',
				'name' => '3X SEHARI 1 TABLET, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			115 => 
			array (
				'codename' => '111 T PC',
				'name' => '3X SEHARI 1 TABLET, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			116 => 
			array (
				'codename' => '1DD0.1ML PC',
				'name' => '1X SEHARI 0.1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			117 => 
			array (
				'codename' => '1DD0.25ML',
				'name' => '1X SEHARI 0.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			118 => 
			array (
				'codename' => '1DD0.25ML AC',
				'name' => '1X SEHARI 0.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			119 => 
			array (
				'codename' => '1DD0.25ML PC',
				'name' => '1X SEHARI 0.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			120 => 
			array (
				'codename' => '1DD0.25T',
				'name' => '1X SEHARI 0.25 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			121 => 
			array (
				'codename' => '1DD0.25T AC',
				'name' => '1X SEHARI 0.25 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			122 => 
			array (
				'codename' => '1DD0.25T M',
				'name' => '1X SEHARI 0.25 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			123 => 
			array (
				'codename' => '1DD0.25T P',
				'name' => '1X SEHARI 0.25 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			124 => 
			array (
				'codename' => 'OL GA',
				'name' => 'OLESKAN (BILA GATAL)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			125 => 
			array (
				'codename' => '5DD20ML PC',
				'name' => '5X SEHARI 20 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			126 => 
			array (
				'codename' => 'LU',
				'name' => 'LUKA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			127 => 
			array (
				'codename' => '5DD25ML',
				'name' => '5X SEHARI 25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			128 => 
			array (
				'codename' => '1DD0.2ML',
				'name' => '1X SEHARI 0.2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			129 => 
			array (
				'codename' => '5DD2ML PC',
				'name' => '5X SEHARI 2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			130 => 
			array (
				'codename' => '1DD0.2ML PC',
				'name' => '1X SEHARI 0.2 ML (SETELAH MAKAN) ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			131 => 
			array (
				'codename' => '1DD0.3ML PC',
				'name' => '1X SEHARI 0.3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			132 => 
			array (
				'codename' => '1DD0.4ML',
				'name' => '1X SEHARI 0.4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			133 => 
			array (
				'codename' => '1DD0.4ML AC',
				'name' => '1X SEHARI 0.4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			134 => 
			array (
				'codename' => '1DD0.4ML PC',
				'name' => '1X SEHARI 0.4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			135 => 
			array (
				'codename' => '1DD0.5ML',
				'name' => '1X SEHARI 0.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			136 => 
			array (
				'codename' => '1DD0.5ML AC',
				'name' => '1X SEHARI 0.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			137 => 
			array (
				'codename' => '1DD0.5ML PC',
				'name' => '1X SEHARI 0.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			138 => 
			array (
				'codename' => '1DD0.5T',
				'name' => '1X SEHARI 0.5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			139 => 
			array (
				'codename' => '3DD3I',
				'name' => '3X SEHARI 3 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			140 => 
			array (
				'codename' => '1DD0.5T AC',
				'name' => '1X SEHARI 0.5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			141 => 
			array (
				'codename' => '1DD0.5T I4 DST',
				'name' => 'HARI 1-4: 1X SEHARI 0.5 TABLET, HARI 5-DST: 1X SEHARI 1 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			142 => 
			array (
				'codename' => '1DD0.5T M',
				'name' => '1X SEHARI 0.5 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			143 => 
			array (
				'codename' => '1DD0.5T PC',
				'name' => '1X SEHARI 0.5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			144 => 
			array (
				'codename' => '1DD0.5T S',
				'name' => '1X SEHARI 0.5 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			145 => 
			array (
				'codename' => '1DD0.6ML',
				'name' => '1X SEHARI 0.6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			146 => 
			array (
				'codename' => '1DD0.6ML AC',
				'name' => '1X SEHARI 0.6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			147 => 
			array (
				'codename' => '1DD0.6ML PC',
				'name' => '1X SEHARI 0.6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			148 => 
			array (
				'codename' => '1DD0.75T',
				'name' => '1X SEHARI 0.75 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			149 => 
			array (
				'codename' => '1DD0.75T AC',
				'name' => '1X SEHARI 0.75 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			150 => 
			array (
				'codename' => '1DD0.75T M',
				'name' => '1X SEHARI 0.75 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			151 => 
			array (
				'codename' => '1DD0.75T P',
				'name' => '1X SEHARI 0.75 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			152 => 
			array (
				'codename' => '1DD0.75T PC',
				'name' => '1X SEHARI 0.75 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			153 => 
			array (
				'codename' => '1DD0.75T S',
				'name' => '1X SEHARI 0.75 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			154 => 
			array (
				'codename' => '1DD0.7ML AC',
				'name' => '1X SEHARI 0.7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			155 => 
			array (
				'codename' => '6DD5ML PC',
				'name' => '6X SEHARI 5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			156 => 
			array (
				'codename' => 'OL M',
				'name' => 'OLESKAN PADA MATA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			157 => 
			array (
				'codename' => '1DD0.7ML PC',
				'name' => '1X SEHARI 0.7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			158 => 
			array (
				'codename' => '1DD0.8ML',
				'name' => '1X SEHARI 0.8 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			159 => 
			array (
				'codename' => '1DD0.8ML AC',
				'name' => '1X SEHARI 0.8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			160 => 
			array (
				'codename' => '1DD0.8ML PC',
				'name' => '1X SEHARI 0.8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			161 => 
			array (
				'codename' => '1DD1.25ML AC',
				'name' => '1X SEHARI 1.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			162 => 
			array (
				'codename' => '1DD1.25ML PC',
				'name' => '1X SEHARI 1.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			163 => 
			array (
				'codename' => '1DD1.5ML',
				'name' => '1X SEHARI 1.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			164 => 
			array (
				'codename' => '1DD1.5ML AC',
				'name' => '1X SEHARI 1.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			165 => 
			array (
				'codename' => '1DD1.5ML PC',
				'name' => '1X SEHARI 1.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			166 => 
			array (
				'codename' => '1DD10G MI',
				'name' => '1X SEHARI 10 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			167 => 
			array (
				'codename' => '1DD10ML AC',
				'name' => '1X SEHARI 10 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			168 => 
			array (
				'codename' => '1DD10ML PC',
				'name' => '1X SEHARI 10 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			169 => 
			array (
				'codename' => '1DD12ML PC',
				'name' => '1X SEHARI 12 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			170 => 
			array (
				'codename' => '1DD15ML AC',
				'name' => '1X SEHARI 15 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			171 => 
			array (
				'codename' => '1DD15ML PC',
				'name' => '1X SEHARI 15 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			172 => 
			array (
				'codename' => '1DD1B',
				'name' => '1X SEHARI 1 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			173 => 
			array (
				'codename' => '1DD1B AC',
				'name' => '1X SEHARI 1 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			174 => 
			array (
				'codename' => '1DD1B PC',
				'name' => '1X SEHARI 1 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			175 => 
			array (
				'codename' => '1DD1C',
				'name' => '1X SEHARI 1 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			176 => 
			array (
				'codename' => '1DD1C AB',
				'name' => '1X SEHARI 1 KAPSUL  (ANTI-BIOTIK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			177 => 
			array (
				'codename' => '1DD1C AC',
				'name' => '1X SEHARI 1 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			178 => 
			array (
				'codename' => '1DD1C AV',
				'name' => '1X SEHARI 1 KAPSUL  (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			179 => 
			array (
				'codename' => '1DD1C M',
				'name' => '1X SEHARI 1 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			180 => 
			array (
				'codename' => '1DD1C P',
				'name' => '1X SEHARI 1 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			181 => 
			array (
				'codename' => '1DD1C P PC',
				'name' => '1X SEHARI 1 KAPSUL, PAGI HARI (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			182 => 
			array (
				'codename' => '1DD1C P PC AD',
				'name' => '1X SEHARI 1 KAPSUL, PAGI HARI, SETELAH MAKAN (ANTI-DEPRESSANT)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			183 => 
			array (
				'codename' => '1DD1C PC',
				'name' => '1X SEHARI 1 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			184 => 
			array (
				'codename' => '1DD1C S',
				'name' => '1X SEHARI 1 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			185 => 
			array (
				'codename' => '1DD1C TI',
				'name' => '1X SEHARI 1 KAPSUL (TIDUR)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			186 => 
			array (
				'codename' => '1DD1G AD',
				'name' => '1X SEHARI 1 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			187 => 
			array (
				'codename' => '1DD1G ADS',
				'name' => '1X SEHARI 1 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			188 => 
			array (
				'codename' => '1DD1G AS',
				'name' => '1X SEHARI 1 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			189 => 
			array (
				'codename' => '1DD1G MI',
				'name' => '1X SEHARI 1 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			190 => 
			array (
				'codename' => '1DD1G ND',
				'name' => '1X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			191 => 
			array (
				'codename' => '1DD1G NDS',
				'name' => '1X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			192 => 
			array (
				'codename' => '1DD1G NS',
				'name' => '1X SEHARI 1 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			193 => 
			array (
				'codename' => '1DD1G OD',
				'name' => '1X SEHARI 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			194 => 
			array (
				'codename' => '1DD1G ODS',
				'name' => '1X SEHARI 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			195 => 
			array (
				'codename' => '1DD1G OS',
				'name' => '1X SEHARI 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			196 => 
			array (
				'codename' => '1DD1I',
				'name' => '1X SEHARI 1 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			197 => 
			array (
				'codename' => '1DD1IJ',
				'name' => '1X SEHARI 1 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			198 => 
			array (
				'codename' => '1DD1ML AC',
				'name' => '1X SEHARI 1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			199 => 
			array (
				'codename' => '1DD1ML PC',
				'name' => '1X SEHARI 1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			200 => 
			array (
				'codename' => '1DD1T',
				'name' => '1X SEHARI 1 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			201 => 
			array (
				'codename' => '1DD1T 15M AC',
				'name' => '1X SEHARI 1 TABLET, 15 MENIT SEBELUM MAKAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			202 => 
			array (
				'codename' => '1DD1T 15M AC M',
				'name' => '1X SEHARI 1 TABLET, 15 MENIT SEBELUM MAKAN (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			203 => 
			array (
				'codename' => '1DD1ML',
				'name' => '1X SEHARI 1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			204 => 
			array (
				'codename' => '1DD1T 15M AC P',
				'name' => '1X SEHARI 1 TABLET, 15 MENIT SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			205 => 
			array (
				'codename' => '010 C AC SS',
				'name' => '1X SEHARI 1 KAPSUL (SIANG, SEBELUM MAKAN) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			206 => 
			array (
				'codename' => '010 C DC SS',
				'name' => '1X SEHARI 1 KAPSUL (SIANG, SAAT MAKAN) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			207 => 
			array (
				'codename' => '100 C SS',
				'name' => '1X SEHARI 1 KAPSUL (PAGI) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			208 => 
			array (
				'codename' => '2DD1.25ML AL',
				'name' => '2X SEHARI 1.25 ML (ANTI-ALERGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			209 => 
			array (
				'codename' => '100 C PC SS',
				'name' => '1X SEHARI 1 KAPSUL (PAGI, SETELAH MAKAN) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			210 => 
			array (
				'codename' => '100 C AC SS',
				'name' => '1X SEHARI 1 KAPSUL (PAGI, SEBELUM MAKAN) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			211 => 
			array (
				'codename' => '1DD1T 15M AC S',
				'name' => '1X SEHARI 1 TABLET, 15 MENIT SEBELUM MAKAN (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			212 => 
			array (
				'codename' => '1DD1T 30M AC',
				'name' => '1X SEHARI 1 TABLET, 30 MENIT SEBELUM MAKAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			213 => 
			array (
				'codename' => '1DD1T 30M AC M',
				'name' => '1X SEHARI 1 TABLET, 30 MENIT SEBELUM MAKAN (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			214 => 
			array (
				'codename' => '1DD1T 30M AC P',
				'name' => '1X SEHARI 1 TABLET, 30 MENIT SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			215 => 
			array (
				'codename' => '1DD1T 30M AC S',
				'name' => '1X SEHARI 1 TABLET, 30 MENIT SEBELUM MAKAN (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			216 => 
			array (
				'codename' => '1DD1T AC',
				'name' => '1X SEHARI 1 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			217 => 
			array (
				'codename' => '1DD1T AV',
				'name' => '1X SEHARI 1 TABLET  (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			218 => 
			array (
				'codename' => '1DD1T M',
				'name' => '1X SEHARI 1 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			219 => 
			array (
				'codename' => '1DD1T MU',
				'name' => '1X SEHARI 1 TABLET (JIKA MUAL)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			220 => 
			array (
				'codename' => '1DD1T P',
				'name' => '1X SEHARI 1 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			221 => 
			array (
				'codename' => '1DD1T S',
				'name' => '1X SEHARI 1 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			222 => 
			array (
				'codename' => '1DD1VT ',
				'name' => '1X SEHARI 1 TABLET VAGINA (MELALUI VAGINA)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			223 => 
			array (
				'codename' => '1DD2.5ML',
				'name' => '1X SEHARI 2.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			224 => 
			array (
				'codename' => '1DD2.5ML AC',
				'name' => '1X SEHARI 2.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			225 => 
			array (
				'codename' => '1DD2.5ML PC',
				'name' => '1X SEHARI 2.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			226 => 
			array (
				'codename' => '1DD20ML',
				'name' => '1X SEHARI 20 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			227 => 
			array (
				'codename' => '1DD20ML AC',
				'name' => '1X SEHARI 20 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			228 => 
			array (
				'codename' => '1DD20ML PC',
				'name' => '1X SEHARI 20 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			229 => 
			array (
				'codename' => '1DD25ML',
				'name' => '1X SEHARI 25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			230 => 
			array (
				'codename' => '1DD25ML AC',
				'name' => '1X SEHARI 25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			231 => 
			array (
				'codename' => '1DD25ML PC',
				'name' => '1X SEHARI 25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			232 => 
			array (
				'codename' => '1DD2B',
				'name' => '1X SEHARI 2 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			233 => 
			array (
				'codename' => '1DD2B AC',
				'name' => '1X SEHARI 2 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			234 => 
			array (
				'codename' => '1DD2B PC',
				'name' => '1X SEHARI 2 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			235 => 
			array (
				'codename' => '1DD2C',
				'name' => '1X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			236 => 
			array (
				'codename' => '1DD2C AC',
				'name' => '1X SEHARI 2 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			237 => 
			array (
				'codename' => '1DD2C M',
				'name' => '1X SEHARI 2 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			238 => 
			array (
				'codename' => '1DD2C P',
				'name' => '1X SEHARI 2 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			239 => 
			array (
				'codename' => '1DD2C PC',
				'name' => '1X SEHARI 2 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			240 => 
			array (
				'codename' => '1DD2C S',
				'name' => '1X SEHARI 2 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			241 => 
			array (
				'codename' => '1DD2G AD',
				'name' => '1X SEHARI 2 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			242 => 
			array (
				'codename' => '1DD2G ADS',
				'name' => '1X SEHARI 2 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			243 => 
			array (
				'codename' => '1DD2G AS',
				'name' => '1X SEHARI 2 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			244 => 
			array (
				'codename' => '1DD2G MI',
				'name' => '1X SEHARI 2 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			245 => 
			array (
				'codename' => '1DD2G ND',
				'name' => '1X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			246 => 
			array (
				'codename' => '1DD2G NDS',
				'name' => '1X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			247 => 
			array (
				'codename' => '1DD2G NS',
				'name' => '1X SEHARI 2 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			248 => 
			array (
				'codename' => '1DD2G OD',
				'name' => '1X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			249 => 
			array (
				'codename' => '1DD2G ODS',
				'name' => '1X SEHARI 2 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			250 => 
			array (
				'codename' => '1DD2G OS',
				'name' => '1X SEHARI 2 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			251 => 
			array (
				'codename' => '1DD2I',
				'name' => '1X SEHARI 2 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			252 => 
			array (
				'codename' => '1DD2IJ',
				'name' => '1X SEHARI 2 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			253 => 
			array (
				'codename' => '1DD2ML',
				'name' => '1X SEHARI 2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			254 => 
			array (
				'codename' => '1DD2ML AC',
				'name' => '1X SEHARI 2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			255 => 
			array (
				'codename' => '1DD2ML PC',
				'name' => '1X SEHARI 2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			256 => 
			array (
				'codename' => '1DD2S',
				'name' => '1X SEHARI 2 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			257 => 
			array (
				'codename' => '1DD2T',
				'name' => '1X SEHARI 2 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			258 => 
			array (
				'codename' => '1DD2T AC',
				'name' => '1X SEHARI 2 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			259 => 
			array (
				'codename' => '1DD2T M',
				'name' => '1X SEHARI 2 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			260 => 
			array (
				'codename' => '1DD2T PC',
				'name' => '1X SEHARI 2 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			261 => 
			array (
				'codename' => '1DD2T S',
				'name' => '1X SEHARI 2 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			262 => 
			array (
				'codename' => '1DD30ML PC',
				'name' => '1X SEHARI 30 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			263 => 
			array (
				'codename' => '1DD3B AC',
				'name' => '1X SEHARI 3 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			264 => 
			array (
				'codename' => '1DD3B PC',
				'name' => '1X SEHARI 3 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			265 => 
			array (
				'codename' => '1DD3C',
				'name' => '1X SEHARI 3 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			266 => 
			array (
				'codename' => '1DD3C AC',
				'name' => '1X SEHARI 3 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			267 => 
			array (
				'codename' => '1DD3C M',
				'name' => '1X SEHARI 3 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			268 => 
			array (
				'codename' => '1DD3C P',
				'name' => '1X SEHARI 3 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			269 => 
			array (
				'codename' => '1DD3C PC',
				'name' => '1X SEHARI 3 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			270 => 
			array (
				'codename' => '1DD3C S',
				'name' => '1X SEHARI 3 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			271 => 
			array (
				'codename' => '1DD3G ADS',
				'name' => '1X SEHARI 3 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			272 => 
			array (
				'codename' => '1DD3G AS',
				'name' => '1X SEHARI 3 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			273 => 
			array (
				'codename' => '1DD3G MI',
				'name' => '1X SEHARI 3 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			274 => 
			array (
				'codename' => '1DD3G ND',
				'name' => '1X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			275 => 
			array (
				'codename' => '1DD3G NDS',
				'name' => '1X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			276 => 
			array (
				'codename' => '1DD3G NS',
				'name' => '1X SEHARI 3 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			277 => 
			array (
				'codename' => '1DD3G ODS',
				'name' => '1X SEHARI 3 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			278 => 
			array (
				'codename' => '1DD3G OS',
				'name' => '1X SEHARI 3 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			279 => 
			array (
				'codename' => '1DD3IJ',
				'name' => '1X SEHARI 3 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			280 => 
			array (
				'codename' => '1DD3ML AC',
				'name' => '1X SEHARI 3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			281 => 
			array (
				'codename' => '1DD3ML PC',
				'name' => '1X SEHARI 3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			282 => 
			array (
				'codename' => '1DD3T',
				'name' => '1X SEHARI 3 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			283 => 
			array (
				'codename' => '1DD3T AC',
				'name' => '1X SEHARI 3 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			284 => 
			array (
				'codename' => '1DD3T M',
				'name' => '1X SEHARI 3 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			285 => 
			array (
				'codename' => '1DD3T P',
				'name' => '1X SEHARI 3 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			286 => 
			array (
				'codename' => '1DD3T PC',
				'name' => '1X SEHARI 3 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			287 => 
			array (
				'codename' => '1DD3T S',
				'name' => '1X SEHARI 3 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			288 => 
			array (
				'codename' => '1DD4B',
				'name' => '1X SEHARI 4 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			289 => 
			array (
				'codename' => '1DD4B AC',
				'name' => '1X SEHARI 4 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			290 => 
			array (
				'codename' => '1DD4B PC',
				'name' => '1X SEHARI 4 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			291 => 
			array (
				'codename' => '1DD4C',
				'name' => '1X SEHARI 4 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			292 => 
			array (
				'codename' => '5DD1C AC',
				'name' => '5X SEHARI 1 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			293 => 
			array (
				'codename' => '5DD1C PC',
				'name' => '5X SEHARI 1 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			294 => 
			array (
				'codename' => '5DD1G AD',
				'name' => '5X SEHARI 1 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			295 => 
			array (
				'codename' => '5DD1G ADS',
				'name' => '5X SEHARI 1 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			296 => 
			array (
				'codename' => '5DD1G AS',
				'name' => '5X SEHARI 1 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			297 => 
			array (
				'codename' => '5DD1G ND',
				'name' => '5X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			298 => 
			array (
				'codename' => '5DD1G NDS',
				'name' => '5X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			299 => 
			array (
				'codename' => '5DD1G NS',
				'name' => '5X SEHARI 1 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			300 => 
			array (
				'codename' => '5DD1G OD',
				'name' => '5X SEHARI 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			301 => 
			array (
				'codename' => '5DD1G ODS',
				'name' => '5X SEHARI 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			302 => 
			array (
				'codename' => '5DD1G OS',
				'name' => '5X SEHARI 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			303 => 
			array (
				'codename' => '101 S',
				'name' => '2X SEHARI 1 SEMPROT (INHALASI) (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			304 => 
			array (
				'codename' => '101 T',
				'name' => '2X SEHARI 1 TABLET (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			305 => 
			array (
				'codename' => '3DDOL Z',
				'name' => 'OLESKAN ZALF 3X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			306 => 
			array (
				'codename' => '1DD0.1ML',
				'name' => '1X SEHARI 0.1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			307 => 
			array (
				'codename' => '1DD1VT M',
				'name' => '1X SEHARI 1 TABLET VAGINA, MALAM (MELALUI VAGINA)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			308 => 
			array (
				'codename' => '1DD3G AD',
				'name' => '1X SEHARI 3 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			309 => 
			array (
				'codename' => '1DD5B AC',
				'name' => '1X SEHARI 5 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			310 => 
			array (
				'codename' => '1DD6I',
				'name' => '1X SEHARI 6 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			311 => 
			array (
				'codename' => '1DD6IJ',
				'name' => '1X SEHARI 6 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			312 => 
			array (
				'codename' => '100 C DC SS',
				'name' => '1X SEHARI 1 KAPSUL (PAGI, SAAT MAKAN) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			313 => 
			array (
				'codename' => '220 S',
				'name' => '2X SEHARI 2 SEMPROT (INHALASI) (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			314 => 
			array (
				'codename' => '2DD1ML',
				'name' => '2X SEHARI 1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			315 => 
			array (
				'codename' => '1DD4C AC',
				'name' => '1X SEHARI 4 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			316 => 
			array (
				'codename' => '1DD4C M',
				'name' => '1X SEHARI 4 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			317 => 
			array (
				'codename' => '1DD4C P',
				'name' => '1X SEHARI 4 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			318 => 
			array (
				'codename' => '1DD4C PC',
				'name' => '1X SEHARI 4 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			319 => 
			array (
				'codename' => '0.500 T AC',
				'name' => '1X SEHARI 0.5 TABLET, SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			320 => 
			array (
				'codename' => '0.500 T PC',
				'name' => '1X SEHARI 0.5 TABLET, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			321 => 
			array (
				'codename' => '0.500.5 C',
				'name' => '2X SEHARI 0.5 KAPSUL (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			322 => 
			array (
				'codename' => '1DD0.1ML AC',
				'name' => '1X SEHARI 0.1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			323 => 
			array (
				'codename' => '0.500.5 C AC',
				'name' => '2X SEHARI 0.5 KAPSUL, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			324 => 
			array (
				'codename' => '0.500.5 C PC',
				'name' => '2X SEHARI 0.5 KAPSUL, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			325 => 
			array (
				'codename' => '0.500.5 T',
				'name' => '2X SEHARI 0.5 TABLET (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			326 => 
			array (
				'codename' => '0.500.5 T AC',
				'name' => '2X SEHARI 0.5 TABLET, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			327 => 
			array (
				'codename' => '0.500.5 T PC',
				'name' => '2X SEHARI 0.5 TABLET, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			328 => 
			array (
				'codename' => '100 C PC',
				'name' => '1X SEHARI 1 KAPSUL, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			329 => 
			array (
				'codename' => '100 S',
				'name' => '1X SEHARI 1 SEMPROT (INHALASI) (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			330 => 
			array (
				'codename' => '100 T',
				'name' => '1X SEHARI 1 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			331 => 
			array (
				'codename' => '100 T AC',
				'name' => '1X SEHARI 1 TABLET, SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			332 => 
			array (
				'codename' => '1DD4C S',
				'name' => '1X SEHARI 4 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			333 => 
			array (
				'codename' => '1DD4G AD',
				'name' => '1X SEHARI 4 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			334 => 
			array (
				'codename' => '1DD4G ADS',
				'name' => '1X SEHARI 4 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			335 => 
			array (
				'codename' => '1DD4G AS',
				'name' => '1X SEHARI 4 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			336 => 
			array (
				'codename' => '1DD4G MI',
				'name' => '1X SEHARI 4 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			337 => 
			array (
				'codename' => '1DD15ML',
				'name' => '1X SEHARI 15 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			338 => 
			array (
				'codename' => '1DD4G ND',
				'name' => '1X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			339 => 
			array (
				'codename' => '1DD4G NDS',
				'name' => '1X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			340 => 
			array (
				'codename' => '1DD4G NS',
				'name' => '1X SEHARI 4 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			341 => 
			array (
				'codename' => '1DD4G OD',
				'name' => '1X SEHARI 4 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			342 => 
			array (
				'codename' => '1DD4G ODS',
				'name' => '1X SEHARI 4 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			343 => 
			array (
				'codename' => '1DD4G OS',
				'name' => '1X SEHARI 4 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			344 => 
			array (
				'codename' => '1DD4I',
				'name' => '1X SEHARI 4 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			345 => 
			array (
				'codename' => '1DD4IJ',
				'name' => '1X SEHARI 4 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			346 => 
			array (
				'codename' => '1DD0.7ML',
				'name' => '1X SEHARI 0.7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			347 => 
			array (
				'codename' => '1DD4ML AC',
				'name' => '1X SEHARI 4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			348 => 
			array (
				'codename' => '1DD30ML',
				'name' => '1X SEHARI 30 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			349 => 
			array (
				'codename' => '1DD4ML PC',
				'name' => '1X SEHARI 4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			350 => 
			array (
				'codename' => '1DD4T',
				'name' => '1X SEHARI 4 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			351 => 
			array (
				'codename' => '1DD4T AC',
				'name' => '1X SEHARI 4 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			352 => 
			array (
				'codename' => '1DD4T P',
				'name' => '1X SEHARI 4 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			353 => 
			array (
				'codename' => '1DD4T PC',
				'name' => '1X SEHARI 4 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			354 => 
			array (
				'codename' => '1DD4T S',
				'name' => '1X SEHARI 4 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			355 => 
			array (
				'codename' => '1DD5B',
				'name' => '1X SEHARI 5 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			356 => 
			array (
				'codename' => '4DD6C',
				'name' => '4X SEHARI 6 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			357 => 
			array (
				'codename' => '1DD5B PC',
				'name' => '1X SEHARI 5 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			358 => 
			array (
				'codename' => '1DD5C',
				'name' => '1X SEHARI 5 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			359 => 
			array (
				'codename' => '1DD5C AC',
				'name' => '1X SEHARI 5 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			360 => 
			array (
				'codename' => '1DD5C M',
				'name' => '1X SEHARI 5 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			361 => 
			array (
				'codename' => '1DD5C P',
				'name' => '1X SEHARI 5 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			362 => 
			array (
				'codename' => '1DD5C PC',
				'name' => '1X SEHARI 5 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			363 => 
			array (
				'codename' => '1DD5C S',
				'name' => '1X SEHARI 5 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			364 => 
			array (
				'codename' => '1DD5G AD',
				'name' => '1X SEHARI 5 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			365 => 
			array (
				'codename' => '1DD5G ADS',
				'name' => '1X SEHARI 5 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			366 => 
			array (
				'codename' => '1DD5G AS',
				'name' => '1X SEHARI 5 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			367 => 
			array (
				'codename' => '1DD5G MI',
				'name' => '1X SEHARI 5 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			368 => 
			array (
				'codename' => '1DD5G ND',
				'name' => '1X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			369 => 
			array (
				'codename' => '1DD5G NDS',
				'name' => '1X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			370 => 
			array (
				'codename' => '1DD5G NS',
				'name' => '1X SEHARI 5 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			371 => 
			array (
				'codename' => '1DD5G OD',
				'name' => '1X SEHARI 5 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			372 => 
			array (
				'codename' => '1DD5G ODS',
				'name' => '1X SEHARI 5 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			373 => 
			array (
				'codename' => '1DD5G OS',
				'name' => '1X SEHARI 5 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			374 => 
			array (
				'codename' => '1DD5IJ',
				'name' => '1X SEHARI 5 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			375 => 
			array (
				'codename' => '1DD5ML AC',
				'name' => '1X SEHARI 5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			376 => 
			array (
				'codename' => '1DD5ML AL',
				'name' => '1X SEHARI 5 ML (ANTI-ALERGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			377 => 
			array (
				'codename' => '1DD5ML PC',
				'name' => '1X SEHARI 5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			378 => 
			array (
				'codename' => '1DD5ML VI',
				'name' => '1X SEHARI 5 ML (VITAMIN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			379 => 
			array (
				'codename' => '1DD5S',
				'name' => '1X SEHARI 5 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			380 => 
			array (
				'codename' => '1DD5T',
				'name' => '1X SEHARI 5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			381 => 
			array (
				'codename' => '1DD5T AC',
				'name' => '1X SEHARI 5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			382 => 
			array (
				'codename' => '2DD0.4ML',
				'name' => '2X SEHARI 0.4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			383 => 
			array (
				'codename' => '1DD5T M',
				'name' => '1X SEHARI 5 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			384 => 
			array (
				'codename' => '1DD5T P',
				'name' => '1X SEHARI 5 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			385 => 
			array (
				'codename' => '1DD5T PC',
				'name' => '1X SEHARI 5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			386 => 
			array (
				'codename' => '1DD5T S',
				'name' => '1X SEHARI 5 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			387 => 
			array (
				'codename' => '1DD6B',
				'name' => '1X SEHARI 6 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			388 => 
			array (
				'codename' => '1DD6B AC',
				'name' => '1X SEHARI 6 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			389 => 
			array (
				'codename' => '1DD6B PC',
				'name' => '1X SEHARI 6 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			390 => 
			array (
				'codename' => '1DD6C',
				'name' => '1X SEHARI 6 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			391 => 
			array (
				'codename' => '2DD5G MI',
				'name' => '2X SEHARI 5 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			392 => 
			array (
				'codename' => '1DD6C AC',
				'name' => '1X SEHARI 6 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			393 => 
			array (
				'codename' => '1DD6C M',
				'name' => '1X SEHARI 6 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			394 => 
			array (
				'codename' => '1DD6C P',
				'name' => '1X SEHARI 6 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			395 => 
			array (
				'codename' => '1DD6C PC',
				'name' => '1X SEHARI 6 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			396 => 
			array (
				'codename' => '1DD6C S',
				'name' => '1X SEHARI 6 KAPSUL (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			397 => 
			array (
				'codename' => '1DD6G AD',
				'name' => '1X SEHARI 6 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			398 => 
			array (
				'codename' => '1DD6G ADS',
				'name' => '1X SEHARI 6 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			399 => 
			array (
				'codename' => '1DD6G AS',
				'name' => '1X SEHARI 6 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			400 => 
			array (
				'codename' => '1DD6G MI',
				'name' => '1X SEHARI 6 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			401 => 
			array (
				'codename' => '1DD6G ND',
				'name' => '1X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			402 => 
			array (
				'codename' => '1DD6G NDS',
				'name' => '1X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			403 => 
			array (
				'codename' => '1DD6G OD',
				'name' => '1X SEHARI 6 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			404 => 
			array (
				'codename' => '1DD6G ODS',
				'name' => '1X SEHARI 6 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			405 => 
			array (
				'codename' => '1DD6G OS',
				'name' => '1X SEHARI 6 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			406 => 
			array (
				'codename' => '1DD6ML AC',
				'name' => '1X SEHARI 6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			407 => 
			array (
				'codename' => '1DD6ML PC',
				'name' => '1X SEHARI 6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			408 => 
			array (
				'codename' => '1DD6S',
				'name' => '1X SEHARI 6 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			409 => 
			array (
				'codename' => '1DD6T',
				'name' => '1X SEHARI 6 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			410 => 
			array (
				'codename' => '1DD6T M',
				'name' => '1X SEHARI 6 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			411 => 
			array (
				'codename' => '1DD6T P',
				'name' => '1X SEHARI 6 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			412 => 
			array (
				'codename' => '1DD6T S',
				'name' => '1X SEHARI 6 TABLET (SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			413 => 
			array (
				'codename' => '1DD7.5ML',
				'name' => '1X SEHARI 7.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			414 => 
			array (
				'codename' => '1DD7.5ML AC',
				'name' => '1X SEHARI 7.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			415 => 
			array (
				'codename' => '1DD7.5ML PC',
				'name' => '1X SEHARI 7.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			416 => 
			array (
				'codename' => '1DD7ML AC',
				'name' => '1X SEHARI 7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			417 => 
			array (
				'codename' => '1DD7ML PC',
				'name' => '1X SEHARI 7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			418 => 
			array (
				'codename' => '1DD8G MI',
				'name' => '1X SEHARI 8 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			419 => 
			array (
				'codename' => '1DD8ML',
				'name' => '1X SEHARI 8 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			420 => 
			array (
				'codename' => '1DD8ML AC',
				'name' => '1X SEHARI 8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			421 => 
			array (
				'codename' => '1D8ML PC',
				'name' => '1X SEHARI 8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			422 => 
			array (
				'codename' => '1DDOL C',
				'name' => 'OLESKAN KRIM 1X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			423 => 
			array (
				'codename' => '1DDOL Z',
				'name' => 'OLESKAN ZALF 1X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			424 => 
			array (
				'codename' => '1DDOL Z OD',
				'name' => 'OLESKAN ZALF 1X SEHARI PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			425 => 
			array (
				'codename' => '1DDOL Z ODS',
				'name' => 'OLESKAN ZALF 1X SEHARI PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			426 => 
			array (
				'codename' => '1DDOL Z OS',
				'name' => 'OLESKAN ZALF 1X SEHARI PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			427 => 
			array (
				'codename' => '1H1G OD',
				'name' => 'TIAP JAM, 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			428 => 
			array (
				'codename' => '1H1G ODS',
				'name' => 'TIAP JAM, 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			429 => 
			array (
				'codename' => '1H1G OS',
				'name' => 'TIAP JAM, 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			430 => 
			array (
				'codename' => '3DD6ML',
				'name' => '3X SEHARI 6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			431 => 
			array (
				'codename' => '1SUP DE ',
				'name' => 'BILA DEMAM GUNAKAN 1 SUPPOSITORIA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			432 => 
			array (
				'codename' => '1W1T',
				'name' => '1X SEMINGGU 1 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			433 => 
			array (
				'codename' => '200 C',
				'name' => '1X SEHARI 2 KAPSUL (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			434 => 
			array (
				'codename' => '200 C AC',
				'name' => '1X SEHARI 2 KAPSUL, SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			435 => 
			array (
				'codename' => '200 C PC',
				'name' => '1X SEHARI 2 KAPSUL, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			436 => 
			array (
				'codename' => '200 S',
				'name' => '1X SEHARI 2 SEMPROT (INHALASI) (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			437 => 
			array (
				'codename' => '200 T',
				'name' => '1X SEHARI 2 TABLET (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			438 => 
			array (
				'codename' => '200 T AC',
				'name' => '1X SEHARI 2 TABLET, SEBELUM MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			439 => 
			array (
				'codename' => '2DDOL C',
				'name' => 'OLESKAN KRIM 2X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			440 => 
			array (
				'codename' => '200 T PC',
				'name' => '1X SEHARI 2 TABLET, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			441 => 
			array (
				'codename' => '202 C',
				'name' => '2X SEHARI 2 KAPSUL (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			442 => 
			array (
				'codename' => '1DD3I',
				'name' => '1X SEHARI 3 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			443 => 
			array (
				'codename' => '202 C AC',
				'name' => '2X SEHARI 2 KAPSUL, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			444 => 
			array (
				'codename' => '202 C PC',
				'name' => '2X SEHARI 2 KAPSUL, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			445 => 
			array (
				'codename' => '202 S',
				'name' => '2X SEHARI 2 SEMPROT (INHALASI) (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			446 => 
			array (
				'codename' => '202 T',
				'name' => '2X SEHARI 2 TABLET (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			447 => 
			array (
				'codename' => '202 T AC',
				'name' => '2X SEHARI 2 TABLET, SEBELUM MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			448 => 
			array (
				'codename' => '202 T PC',
				'name' => '2X SEHARI 2 TABLET, SETELAH MAKAN (PAGI DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			449 => 
			array (
				'codename' => '220 C',
				'name' => '2X SEHARI 2 KAPSUL (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			450 => 
			array (
				'codename' => '1DD7ML',
				'name' => '1X SEHARI 7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			451 => 
			array (
				'codename' => '220 C PC',
				'name' => '2X SEHARI 2 KAPSUL, SETELAH MAKAN (PAGI DAN SIANG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			452 => 
			array (
				'codename' => '222 C AC',
				'name' => '3X SEHARI 2 KAPSUL, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			453 => 
			array (
				'codename' => '222 C PC',
				'name' => '3X SEHARI 2 KAPSUL, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			454 => 
			array (
				'codename' => '222 S',
				'name' => '3X SEHARI 2 SEMPROT (INHALASI) (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			455 => 
			array (
				'codename' => '222 T',
				'name' => '3X SEHARI 2 TABLET (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			456 => 
			array (
				'codename' => '222 T AC',
				'name' => '3X SEHARI 2 TABLET, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			457 => 
			array (
				'codename' => '222 T PC',
				'name' => '3X SEHARI 2 TABLET, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			458 => 
			array (
				'codename' => '2DD0.1ML',
				'name' => '2X SEHARI 0.1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			459 => 
			array (
				'codename' => '2DD0.1ML AC',
				'name' => '2X SEHARI 0.1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			460 => 
			array (
				'codename' => '2DD0.1ML PC',
				'name' => '2X SEHARI 0.1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			461 => 
			array (
				'codename' => '2DD0.25ML',
				'name' => '2X SEHARI 0.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			462 => 
			array (
				'codename' => '4DD0.4ML',
				'name' => '4X SEHARI 0.4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			463 => 
			array (
				'codename' => '2DD0.25ML PC',
				'name' => '2X SEHARI 0.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			464 => 
			array (
				'codename' => '2DD0.25T',
				'name' => '2X SEHARI 0.25 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			465 => 
			array (
				'codename' => '2DD0.25T AC',
				'name' => '2X SEHARI 0.25 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			466 => 
			array (
				'codename' => '2DD0.25T PC',
				'name' => '2X SEHARI 0.25 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			467 => 
			array (
				'codename' => '2DD0.2ML AC',
				'name' => '2X SEHARI 0.2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			468 => 
			array (
				'codename' => '2DD0.2ML BA',
				'name' => '2X SEHARI 0.2 ML (BATUK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			469 => 
			array (
				'codename' => '2DD0.2ML PC',
				'name' => '2X SEHARI 0.2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			470 => 
			array (
				'codename' => '2DD0.3ML',
				'name' => '2X SEHARI 0.3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			471 => 
			array (
				'codename' => '2DD0.3ML AC',
				'name' => '2X SEHARI 0.3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			472 => 
			array (
				'codename' => '2DD0.3ML PC',
				'name' => '2X SEHARI 0.3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			473 => 
			array (
				'codename' => '2DD0.4ML AC',
				'name' => '2X SEHARI 0.4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			474 => 
			array (
				'codename' => '3DD6IJ',
				'name' => '3X SEHARI 6 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			475 => 
			array (
				'codename' => '2DD0.4ML PC',
				'name' => '2X SEHARI 0.4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			476 => 
			array (
				'codename' => '2DD0.5ML',
				'name' => '2X SEHARI 0.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			477 => 
			array (
				'codename' => '2DD0.5ML AC',
				'name' => '2X SEHARI 0.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			478 => 
			array (
				'codename' => '2DD0.5ML PC',
				'name' => '2X SEHARI 0.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			479 => 
			array (
				'codename' => '001 C SS',
				'name' => '1X SEHARI 1 KAPSUL (MALAM) - SELANG SEHARI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			480 => 
			array (
				'codename' => '1.501.5 T',
				'name' => '2X SEHARI (PAGI 1.5 TABLET, MALAM 1.5 TABLET)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			481 => 
			array (
				'codename' => '1.501.5 T AC',
				'name' => '2X SEHARI (PAGI 1.5 TABLET, MALAM 1.5 TABLET) - SEBELUM MAKAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			482 => 
			array (
				'codename' => '1.501.5 T PC',
				'name' => '2X SEHARI (PAGI 1.5 TABLET, MALAM 1.5 TABLET) - SETELAH MAKAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			483 => 
			array (
				'codename' => '6DD3T AC',
				'name' => '6X SEHARI 3 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			484 => 
			array (
				'codename' => '2DD0.5T',
				'name' => '2X SEHARI 0.5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			485 => 
			array (
				'codename' => '2DD0.5T AC',
				'name' => '2X SEHARI 0.5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			486 => 
			array (
				'codename' => '2DD0.5T CE',
				'name' => '2X SEHARI 0.5 TABLET (CEMAS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			487 => 
			array (
				'codename' => '2DD0.5T MU',
				'name' => '2X SEHARI 0.5 TABLET (JIKA MUAL)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			488 => 
			array (
				'codename' => '2DD0.5T PC',
				'name' => '2X SEHARI 0.5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			489 => 
			array (
				'codename' => '2DD0.6ML AC',
				'name' => '2X SEHARI 0.6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			490 => 
			array (
				'codename' => '2DD0.6ML DE',
				'name' => '2X SEHARI 0.6 ML (DEMAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			491 => 
			array (
				'codename' => '2DD0.6ML PC',
				'name' => '2X SEHARI 0.6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			492 => 
			array (
				'codename' => '2DD0.75T',
				'name' => '2X SEHARI 0.75 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			493 => 
			array (
				'codename' => '4DD5C',
				'name' => '4X SEHARI 5 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			494 => 
			array (
				'codename' => '2DD0.75T AC',
				'name' => '2X SEHARI 0.75 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			495 => 
			array (
				'codename' => '2DD0.75T PC',
				'name' => '2X SEHARI 0.75 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			496 => 
			array (
				'codename' => '2DD0.7ML',
				'name' => '2X SEHARI 0.7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			497 => 
			array (
				'codename' => '1DD4S',
				'name' => '1X SEHARI 4 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			498 => 
			array (
				'codename' => '2DD0.7ML PC',
				'name' => '2X SEHARI 0.7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			499 => 
			array (
				'codename' => '2DD0.8ML AC',
				'name' => '2X SEHARI 0.8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			500 => 
			array (
				'codename' => '2DD0.8ML PC',
				'name' => '2X SEHARI 0.8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			501 => 
			array (
				'codename' => '2DD1.25ML',
				'name' => '2X SEHARI 1.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			502 => 
			array (
				'codename' => '2DD1.25ML AC',
				'name' => '2X SEHARI 1.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			503 => 
			array (
				'codename' => '46DD1.25ML',
				'name' => '4-6X SEHARI 1.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			504 => 
			array (
				'codename' => '2DD1.25ML PC',
				'name' => '2X SEHARI 1.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			505 => 
			array (
				'codename' => '2DD1.5ML',
				'name' => '2X SEHARI 1.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			506 => 
			array (
				'codename' => '2DD1.5ML AC',
				'name' => '2X SEHARI 1.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			507 => 
			array (
				'codename' => '2DD1.5ML PC',
				'name' => '2X SEHARI 1.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			508 => 
			array (
				'codename' => '2DD10G MI',
				'name' => '2X SEHARI 10 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			509 => 
			array (
				'codename' => '2DD10ML AC',
				'name' => '2X SEHARI 10 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			510 => 
			array (
				'codename' => '2DD10ML PC',
				'name' => '2X SEHARI 10 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			511 => 
			array (
				'codename' => '2DD12ML',
				'name' => '2X SEHARI 12 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			512 => 
			array (
				'codename' => '2DD12ML AC',
				'name' => '2X SEHARI 12 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			513 => 
			array (
				'codename' => '2DD12ML PC',
				'name' => '2X SEHARI 12 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			514 => 
			array (
				'codename' => '2DD15ML',
				'name' => '2X SEHARI 15 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			515 => 
			array (
				'codename' => '2DD15ML AC',
				'name' => '2X SEHARI 15 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			516 => 
			array (
				'codename' => '2DD15ML PC',
				'name' => '2X SEHARI 15 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			517 => 
			array (
				'codename' => '2DD1B',
				'name' => '2X SEHARI 1 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			518 => 
			array (
				'codename' => '2DD1B AC',
				'name' => '2X SEHARI 1 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			519 => 
			array (
				'codename' => '2DD1B NA',
				'name' => '2X SEHARI 1 BUNGKUS (NAFSU MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			520 => 
			array (
				'codename' => '2DD1B PC',
				'name' => '2X SEHARI 1 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			521 => 
			array (
				'codename' => '2DD1C',
				'name' => '2X SEHARI 1 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			522 => 
			array (
				'codename' => '2DD1C AB',
				'name' => '2X SEHARI 1 KAPSUL (ANTI-BIOTIK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			523 => 
			array (
				'codename' => '2DD1C AC',
				'name' => '2X SEHARI 1 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			524 => 
			array (
				'codename' => '2DD1C PC',
				'name' => '2X SEHARI 1 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			525 => 
			array (
				'codename' => '2DD1G AD',
				'name' => '2X SEHARI 1 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			526 => 
			array (
				'codename' => '2DD1G ADS',
				'name' => '2X SEHARI 1 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			527 => 
			array (
				'codename' => '2DD1G AS',
				'name' => '2X SEHARI 1 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			528 => 
			array (
				'codename' => '2DD1G MI',
				'name' => '2X SEHARI 1 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			529 => 
			array (
				'codename' => '2DD1G ND',
				'name' => '2X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			530 => 
			array (
				'codename' => '2DD1G NDS',
				'name' => '2X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			531 => 
			array (
				'codename' => '2DD1G NS',
				'name' => '2X SEHARI 1 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			532 => 
			array (
				'codename' => '2DD1G OD',
				'name' => '2X SEHARI 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			533 => 
			array (
				'codename' => '2DD1G ODS',
				'name' => '2X SEHARI 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			534 => 
			array (
				'codename' => '2DD1G OS',
				'name' => '2X SEHARI 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			535 => 
			array (
				'codename' => '1DD6T AC',
				'name' => '1X SEHARI 6 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			536 => 
			array (
				'codename' => '2DD2B PC',
				'name' => '2X SEHARI 2 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			537 => 
			array (
				'codename' => '2DD2C AC',
				'name' => '2X SEHARI 2 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			538 => 
			array (
				'codename' => '2DD2G ND',
				'name' => '2X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			539 => 
			array (
				'codename' => '2DD2G NDS',
				'name' => '2X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			540 => 
			array (
				'codename' => '2DD2G NS',
				'name' => '2X SEHARI 2 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			541 => 
			array (
				'codename' => '2DD2G OD',
				'name' => '2X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			542 => 
			array (
				'codename' => '2DD2G ODS',
				'name' => '2X SEHARI 2 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			543 => 
			array (
				'codename' => '2DD2G OS',
				'name' => '2X SEHARI 2 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			544 => 
			array (
				'codename' => '2DD2I',
				'name' => '2X SEHARI 2 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			545 => 
			array (
				'codename' => '3DD1T MA',
				'name' => '3X SEHARI 1 TABLET (MAAG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			546 => 
			array (
				'codename' => '2DD2IJ',
				'name' => '2X SEHARI 2 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			547 => 
			array (
				'codename' => '2DD2ML',
				'name' => '2X SEHARI 2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			548 => 
			array (
				'codename' => '2DD2ML AC',
				'name' => '2X SEHARI 2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			549 => 
			array (
				'codename' => '46DD0.8ML',
				'name' => '4-6X SEHARI 0.8 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			550 => 
			array (
				'codename' => '2DD2ML PC',
				'name' => '2X SEHARI 2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			551 => 
			array (
				'codename' => '2DD2S',
				'name' => '2X SEHARI 2 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			552 => 
			array (
				'codename' => '2DD2T AC',
				'name' => '2X SEHARI 2 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			553 => 
			array (
				'codename' => '2DD2T DC',
				'name' => '2X SEHARI 2 TABLET (SAAT MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			554 => 
			array (
				'codename' => '2DD2T PC',
				'name' => '2X SEHARI 2 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			555 => 
			array (
				'codename' => '2DD30ML',
				'name' => '2X SEHARI 30 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			556 => 
			array (
				'codename' => '2DD30ML AC',
				'name' => '2X SEHARI 30 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			557 => 
			array (
				'codename' => '2DD30ML PC',
				'name' => '2X SEHARI 30 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			558 => 
			array (
				'codename' => '2DD3B',
				'name' => '2X SEHARI 3 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			559 => 
			array (
				'codename' => '2DD3B AC',
				'name' => '2X SEHARI 3 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			560 => 
			array (
				'codename' => '2DD3B PC',
				'name' => '2X SEHARI 3 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			561 => 
			array (
				'codename' => '5DD2C AC',
				'name' => '5X SEHARI 2 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			562 => 
			array (
				'codename' => '5DD2C PC',
				'name' => '5X SEHARI 2 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			563 => 
			array (
				'codename' => '5DD2G AD',
				'name' => '5X SEHARI 2 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			564 => 
			array (
				'codename' => '5DD2G ADS',
				'name' => '5X SEHARI 2 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			565 => 
			array (
				'codename' => '5DD2G AS',
				'name' => '5X SEHARI 2 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			566 => 
			array (
				'codename' => '5DD2ML',
				'name' => '5X SEHARI 2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			567 => 
			array (
				'codename' => '2DD3C',
				'name' => '2X SEHARI 3 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			568 => 
			array (
				'codename' => '2DD3C AC',
				'name' => '2X SEHARI 3 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			569 => 
			array (
				'codename' => '2DD3C PC',
				'name' => '2X SEHARI 3 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			570 => 
			array (
				'codename' => '2DD3G AD',
				'name' => '2X SEHARI 3 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			571 => 
			array (
				'codename' => '2DD3G ADS',
				'name' => '2X SEHARI 3 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			572 => 
			array (
				'codename' => '2DD3G AS',
				'name' => '2X SEHARI 3 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			573 => 
			array (
				'codename' => '2DD3G ND',
				'name' => '2X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			574 => 
			array (
				'codename' => '3DD1.25ML AC',
				'name' => '3X SEHARI 1.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			575 => 
			array (
				'codename' => '2DD3G NDS',
				'name' => '2X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			576 => 
			array (
				'codename' => '2DD3G NS',
				'name' => '2X SEHARI 3 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			577 => 
			array (
				'codename' => '2DD3G OD',
				'name' => '2X SEHARI 3 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			578 => 
			array (
				'codename' => '2DD3G ODS',
				'name' => '2X SEHARI 3 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			579 => 
			array (
				'codename' => '2DD3G OS',
				'name' => '2X SEHARI 3 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			580 => 
			array (
				'codename' => '2DD3I',
				'name' => '2X SEHARI 3 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			581 => 
			array (
				'codename' => '2DD3IJ',
				'name' => '2X SEHARI 3 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			582 => 
			array (
				'codename' => '2DD3ML',
				'name' => '2X SEHARI 3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			583 => 
			array (
				'codename' => '2DD3ML AC',
				'name' => '2X SEHARI 3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			584 => 
			array (
				'codename' => '2DD3ML PC',
				'name' => '2X SEHARI 3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			585 => 
			array (
				'codename' => '2DD3S',
				'name' => '2X SEHARI 3 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			586 => 
			array (
				'codename' => '2DD3T',
				'name' => '2X SEHARI 3 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			587 => 
			array (
				'codename' => '2DD3T AC',
				'name' => '2X SEHARI 3 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			588 => 
			array (
				'codename' => '2DD3T PC',
				'name' => '2X SEHARI 3 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			589 => 
			array (
				'codename' => '2DD4B',
				'name' => '2X SEHARI 4 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			590 => 
			array (
				'codename' => '2DD4B AC',
				'name' => '2X SEHARI 4 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			591 => 
			array (
				'codename' => '2DD4B PC',
				'name' => '2X SEHARI 4 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			592 => 
			array (
				'codename' => '2DD4C AC',
				'name' => '2X SEHARI 4 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			593 => 
			array (
				'codename' => '2DD4C PC',
				'name' => '2X SEHARI 4 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			594 => 
			array (
				'codename' => '2DD4G AD',
				'name' => '2X SEHARI 4 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			595 => 
			array (
				'codename' => '2DD4G ADS',
				'name' => '2X SEHARI 4 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			596 => 
			array (
				'codename' => '2DD4G AS',
				'name' => '2X SEHARI 4 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			597 => 
			array (
				'codename' => '1DD3ML',
				'name' => '1X SEHARI 3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			598 => 
			array (
				'codename' => '3DD3G NS',
				'name' => '3X SEHARI 3 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			599 => 
			array (
				'codename' => '100 T PC',
				'name' => '1X SEHARI 1 TABLET, SETELAH MAKAN (PAGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			600 => 
			array (
				'codename' => '2DD4G ND',
				'name' => '2X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			601 => 
			array (
				'codename' => '2DD4G NDS',
				'name' => '2X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			602 => 
			array (
				'codename' => '2DD4G NS',
				'name' => '2X SEHARI 4 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			603 => 
			array (
				'codename' => '2DD4G OD',
				'name' => '2X SEHARI 4 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			604 => 
			array (
				'codename' => '2DD4G ODS',
				'name' => '2X SEHARI 4 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			605 => 
			array (
				'codename' => '2DD4G OS',
				'name' => '2X SEHARI 4 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			606 => 
			array (
				'codename' => '2DD4I',
				'name' => '2X SEHARI 4 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			607 => 
			array (
				'codename' => '2DD4IJ',
				'name' => '2X SEHARI 4 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			608 => 
			array (
				'codename' => '2DD4ML',
				'name' => '2X SEHARI 4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			609 => 
			array (
				'codename' => '2DD4ML AC',
				'name' => '2X SEHARI 4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			610 => 
			array (
				'codename' => '2DD4ML PC',
				'name' => '2X SEHARI 4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			611 => 
			array (
				'codename' => '2DD4S',
				'name' => '2X SEHARI 4 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			612 => 
			array (
				'codename' => '2DD4T',
				'name' => '2X SEHARI 4 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			613 => 
			array (
				'codename' => '2DD4T AC',
				'name' => '2X SEHARI 4 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			614 => 
			array (
				'codename' => '2DD4T PC',
				'name' => '2X SEHARI 4 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			615 => 
			array (
				'codename' => '2DD5B',
				'name' => '2X SEHARI 5 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			616 => 
			array (
				'codename' => '2DD5B AC',
				'name' => '2X SEHARI 5 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			617 => 
			array (
				'codename' => '2DD5B PC',
				'name' => '2X SEHARI 5 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			618 => 
			array (
				'codename' => '2DD5C PC',
				'name' => '2X SEHARI 5 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			619 => 
			array (
				'codename' => '2DD5G AD',
				'name' => '2X SEHARI 5 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			620 => 
			array (
				'codename' => '2DD5G ADS',
				'name' => '2X SEHARI 5 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			621 => 
			array (
				'codename' => '2DD5G AS',
				'name' => '2X SEHARI 5 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			622 => 
			array (
				'codename' => '2DD5G ND',
				'name' => '2X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			623 => 
			array (
				'codename' => '2DD5G NDS',
				'name' => '2X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			624 => 
			array (
				'codename' => '4DD1.5ML',
				'name' => '4X SEHARI 1.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			625 => 
			array (
				'codename' => '2DD5G NS',
				'name' => '2X SEHARI 5 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			626 => 
			array (
				'codename' => '2DD5G OD',
				'name' => '2X SEHARI 5 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			627 => 
			array (
				'codename' => '3DD1.25ML PC',
				'name' => '3X SEHARI 1.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			628 => 
			array (
				'codename' => '2DD5G ODS',
				'name' => '2X SEHARI 5 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			629 => 
			array (
				'codename' => '2DD5I',
				'name' => '2X SEHARI 5 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			630 => 
			array (
				'codename' => '2DD5IJ',
				'name' => '2X SEHARI 5 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			631 => 
			array (
				'codename' => '2DD5ML',
				'name' => '2X SEHARI 5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			632 => 
			array (
				'codename' => '2DD5ML AC',
				'name' => '2X SEHARI 5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			633 => 
			array (
				'codename' => '2DD5ML PC',
				'name' => '2X SEHARI 5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			634 => 
			array (
				'codename' => '2DD5ML PC VI ',
				'name' => '2X SEHARI 5 ML SETELAH MAKAN (VITAMIN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			635 => 
			array (
				'codename' => '2DD5S',
				'name' => '2X SEHARI 5 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			636 => 
			array (
				'codename' => '2DD5T AC',
				'name' => '2X SEHARI 5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			637 => 
			array (
				'codename' => '2DD5T PC',
				'name' => '2X SEHARI 5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			638 => 
			array (
				'codename' => '2DD6B AC',
				'name' => '2X SEHARI 6 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			639 => 
			array (
				'codename' => '2DD6B PC',
				'name' => '2X SEHARI 6 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			640 => 
			array (
				'codename' => '2DD6C',
				'name' => '2X SEHARI 6 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			641 => 
			array (
				'codename' => '2DD6C AC',
				'name' => '2X SEHARI 6 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			642 => 
			array (
				'codename' => '2DD6C PC',
				'name' => '2X SEHARI 6 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			643 => 
			array (
				'codename' => '2DD6G AD',
				'name' => '2X SEHARI 6 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			644 => 
			array (
				'codename' => '2DD6G ADS',
				'name' => '2X SEHARI 6 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			645 => 
			array (
				'codename' => '2DD6G AS',
				'name' => '2X SEHARI 6 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			646 => 
			array (
				'codename' => '2DD6G MI',
				'name' => '2X SEHARI 6 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			647 => 
			array (
				'codename' => '2DD6G ND',
				'name' => '2X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			648 => 
			array (
				'codename' => '2DD6G NDS',
				'name' => '2X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			649 => 
			array (
				'codename' => '2DD6G NS',
				'name' => '2X SEHARI 6 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			650 => 
			array (
				'codename' => '2DD6G OD',
				'name' => '2X SEHARI 6 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			651 => 
			array (
				'codename' => '2DD6G ODS',
				'name' => '2X SEHARI 6 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			652 => 
			array (
				'codename' => '2DD6G OS',
				'name' => '2X SEHARI 6 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			653 => 
			array (
				'codename' => '2DD6I',
				'name' => '2X SEHARI 6 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			654 => 
			array (
				'codename' => '2DD6IJ',
				'name' => '2X SEHARI 6 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			655 => 
			array (
				'codename' => '2DD6ML PC',
				'name' => '2X SEHARI 6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			656 => 
			array (
				'codename' => '2DD6S',
				'name' => '2X SEHARI 6 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			657 => 
			array (
				'codename' => '2DD6T AC',
				'name' => '2X SEHARI 6 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			658 => 
			array (
				'codename' => '2DD6T PC',
				'name' => '2X SEHARI 6 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			659 => 
			array (
				'codename' => '2DD7.5ML AC',
				'name' => '2X SEHARI 7.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			660 => 
			array (
				'codename' => '2DD7.5ML PC',
				'name' => '2X SEHARI 7.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			661 => 
			array (
				'codename' => '2DD7ML AC',
				'name' => '2X SEHARI 7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			662 => 
			array (
				'codename' => '2DD7ML PC',
				'name' => '2X SEHARI 7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			663 => 
			array (
				'codename' => '2DD8G MI',
				'name' => '2X SEHARI 8 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			664 => 
			array (
				'codename' => '2DD8ML AC',
				'name' => '2X SEHARI 8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			665 => 
			array (
				'codename' => '2DD8ML PC',
				'name' => '2X SEHARI 8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			666 => 
			array (
				'codename' => '2DDOL TI',
				'name' => '2X SEHARI OLESKAN TIPIS PADA KULIT',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			667 => 
			array (
				'codename' => '2DDOL TI BE',
				'name' => '2X SEHARI OLESKAN TIPIS PADA BERCAK DIKULIT',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			668 => 
			array (
				'codename' => '2DDOL TI BH',
				'name' => '2X SEHARI OLESKAN TIPIS PADA BERCAK KEHITAMAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			669 => 
			array (
				'codename' => '2DDOL Z',
				'name' => 'OLESKAN ZALF 2X SEHARI ',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			670 => 
			array (
				'codename' => '3DD0.8ML AC',
				'name' => '3X SEHARI 0.8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			671 => 
			array (
				'codename' => '2DDOL Z OD',
				'name' => 'OLESKAN ZALF 2X SEHARI PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			672 => 
			array (
				'codename' => '2DDOL Z ODS',
				'name' => 'OLESKAN ZALF 2X SEHARI PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			673 => 
			array (
				'codename' => '2DDOL Z OS',
				'name' => 'OLESKAN ZALF 2X SEHARI PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			674 => 
			array (
				'codename' => '2H1G OD',
				'name' => 'TIAP 2 JAM, 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			675 => 
			array (
				'codename' => '2H1G ODS',
				'name' => 'TIAP 2 JAM, 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			676 => 
			array (
				'codename' => '2H1G OS',
				'name' => 'TIAP 2 JAM, 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			677 => 
			array (
				'codename' => '3DD0.1ML',
				'name' => '3X SEHARI 0.1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			678 => 
			array (
				'codename' => '3DD0.1ML AC',
				'name' => '3X SEHARI 0.1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			679 => 
			array (
				'codename' => '3DD0.1ML PC',
				'name' => '3X SEHARI 0.1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			680 => 
			array (
				'codename' => '3DD0.25ML',
				'name' => '3X SEHARI 0.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			681 => 
			array (
				'codename' => '3DD0.25ML AC',
				'name' => '3X SEHARI 0.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			682 => 
			array (
				'codename' => '3DD0.25ML PC',
				'name' => '3X SEHARI 0.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			683 => 
			array (
				'codename' => '3DD0.25T PC',
				'name' => '3X SEHARI 0.25 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			684 => 
			array (
				'codename' => '3DD0.2ML',
				'name' => '3X SEHARI 0.2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			685 => 
			array (
				'codename' => '3DD0.2ML AC',
				'name' => '3X SEHARI 0.2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			686 => 
			array (
				'codename' => '3DD0.2ML BA',
				'name' => '3X SEHARI 0.2 ML (BATUK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			687 => 
			array (
				'codename' => '3DD0.2ML PC',
				'name' => '3X SEHARI 0.2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			688 => 
			array (
				'codename' => '3DD0.3ML',
				'name' => '3X SEHARI 0.3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			689 => 
			array (
				'codename' => '3DD0.3ML AC',
				'name' => '3X SEHARI 0.3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			690 => 
			array (
				'codename' => '3DD0.3ML BA',
				'name' => '3X SEHARI 0.3 ML (BATUK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			691 => 
			array (
				'codename' => '3DD0.3ML PC',
				'name' => '3X SEHARI 0.3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			692 => 
			array (
				'codename' => '3DD0.3ML PI',
				'name' => '3X SEHARI 0.3 ML (PILEK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			693 => 
			array (
				'codename' => '3DD0.4ML',
				'name' => '3X SEHARI 0.4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			694 => 
			array (
				'codename' => '3DD0.4ML AC',
				'name' => '3X SEHARI 0.4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			695 => 
			array (
				'codename' => '3DD0.4ML PC',
				'name' => '3X SEHARI 0.4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			696 => 
			array (
				'codename' => '3DD0.5C PSM AC',
				'name' => '3X SEHARI 0.5 KAPSUL, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			697 => 
			array (
				'codename' => '4DD0.2ML',
				'name' => '4X SEHARI 0.2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			698 => 
			array (
				'codename' => '3DD0.5C PSM PC',
				'name' => '3X SEHARI 0.5 KAPSUL, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			699 => 
			array (
				'codename' => '3DD0.5ML',
				'name' => '3X SEHARI 0.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			700 => 
			array (
				'codename' => '3DD0.5ML AC',
				'name' => '3X SEHARI 0.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			701 => 
			array (
				'codename' => '3DD0.5ML PC',
				'name' => '3X SEHARI 0.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			702 => 
			array (
				'codename' => '3D0.5ML PI',
				'name' => '3X SEHARI 0.5 ML (PILEK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			703 => 
			array (
				'codename' => '3DD0.5T',
				'name' => '3X SEHARI 0.5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			704 => 
			array (
				'codename' => '3DD0.5T AC',
				'name' => '3X SEHARI 0.5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			705 => 
			array (
				'codename' => '2DD2T',
				'name' => '2X SEHARI 2 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			706 => 
			array (
				'codename' => '3DD0.5T MU',
				'name' => '3X SEHARI 0.5 TABLET (JIKA MUAL)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			707 => 
			array (
				'codename' => '3DD0.5T PC',
				'name' => '3X SEHARI 0.5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			708 => 
			array (
				'codename' => '3DD2T DC',
				'name' => '3X SEHARI 2 TABLET (SAAT MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			709 => 
			array (
				'codename' => '3DD0.5T PSM AC',
				'name' => '3X SEHARI 0.5 TABLET, SEBELUM MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			710 => 
			array (
				'codename' => '3DD0.5T PSM PC',
				'name' => '3X SEHARI 0.5 TABLET, SETELAH MAKAN (PAGI, SIANG DAN MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			711 => 
			array (
				'codename' => '3DD0.6ML',
				'name' => '3X SEHARI 0.6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			712 => 
			array (
				'codename' => '3DD0.6ML AC',
				'name' => '3X SEHARI 0.6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			713 => 
			array (
				'codename' => '2DD1T MA',
				'name' => '2X SEHARI 1 TABLET (MAAG)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			714 => 
			array (
				'codename' => '2DDIC TO',
				'name' => '2X SEHARI 1 KAPSUL (TEGANG OTOT)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			715 => 
			array (
				'codename' => '3DD1.25ML AA',
				'name' => '3X SEHARI 1.25 ML (ANTI-ALERGI)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			716 => 
			array (
				'codename' => '3DD1B DI',
				'name' => '3X SEHARI 1 BUNGKUS (DIARE)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			717 => 
			array (
				'codename' => '3DD1B IN',
				'name' => '3X SEHARI 1 BUNGKUS (INFLAMASI SALURAN PERNAFASAN DAN TENGGOROKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			718 => 
			array (
				'codename' => '3DDO PA',
				'name' => 'OLESKAN 3X SEHARI (DI BELAKANG PAHA)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			719 => 
			array (
				'codename' => '0-0-0.5 C',
				'name' => '1X SEHARI 0.5 KAPSUL (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			720 => 
			array (
				'codename' => '3DD1B BP',
				'name' => '3X SEHARI 1 BUNGKUS (BATUK DAN PILEK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			721 => 
			array (
				'codename' => '3DD1B DE',
				'name' => '3X SEHARI 1 BUNGKUS (DEMAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			722 => 
			array (
				'codename' => '3DD1B PC',
				'name' => '3X SEHARI 1 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			723 => 
			array (
				'codename' => '3DD1C',
				'name' => '3X SEHARI 1 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			724 => 
			array (
				'codename' => '3DD1C AB',
				'name' => '3X SEHARI 1 KAPSUL (ANTI-BIOTIK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			725 => 
			array (
				'codename' => '3DD1C AC',
				'name' => '3X SEHARI 1 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			726 => 
			array (
				'codename' => '3DD1C AV',
				'name' => '3X SEHARI 1 KAPSUL  (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			727 => 
			array (
				'codename' => '3DD1C PC',
				'name' => '3X SEHARI 1 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			728 => 
			array (
				'codename' => '3DD1G AD',
				'name' => '3X SEHARI 1 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			729 => 
			array (
				'codename' => '3DD1G ADS',
				'name' => '3X SEHARI 1 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			730 => 
			array (
				'codename' => '3DD1G AS',
				'name' => '3X SEHARI 1 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			731 => 
			array (
				'codename' => '3DD1G MI',
				'name' => '3X SEHARI 1 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			732 => 
			array (
				'codename' => '3DD1G ND',
				'name' => '3X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			733 => 
			array (
				'codename' => '3DD1G NDS',
				'name' => '3X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			734 => 
			array (
				'codename' => '3DD1G NS',
				'name' => '3X SEHARI 1 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			735 => 
			array (
				'codename' => '3DD1G OD',
				'name' => '3X SEHARI 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			736 => 
			array (
				'codename' => '3DD1G ODS',
				'name' => '3X SEHARI 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			737 => 
			array (
				'codename' => '3DD1G OS',
				'name' => '3X SEHARI 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			738 => 
			array (
				'codename' => '3DD1I',
				'name' => '3X SEHARI 1 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			739 => 
			array (
				'codename' => '3DD1IJ',
				'name' => '3X SEHARI 1 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			740 => 
			array (
				'codename' => '3DD1ML AC',
				'name' => '3X SEHARI 1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			741 => 
			array (
				'codename' => '3DD1ML PC',
				'name' => '3X SEHARI 1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			742 => 
			array (
				'codename' => '3DD1S',
				'name' => '3X SEHARI 1 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			743 => 
			array (
				'codename' => '3DD1SUP',
				'name' => '3X SEHARI 1 SUPPOSITORIA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			744 => 
			array (
				'codename' => '3DD1T',
				'name' => '3X SEHARI 1 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			745 => 
			array (
				'codename' => '3DD1T AC',
				'name' => '3X SEHARI 1 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			746 => 
			array (
				'codename' => '2DD6B',
				'name' => '2X SEHARI 6 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			747 => 
			array (
				'codename' => '3DD1T AV',
				'name' => '3X SEHARI 1 TABLET  (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			748 => 
			array (
				'codename' => '3DD1T DC',
				'name' => '3X SEHARI 1 TABLET (SAAT MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			749 => 
			array (
				'codename' => '3DD1T DE',
				'name' => '3X SEHARI 1 TABLET (DEMAM/PANAS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			750 => 
			array (
				'codename' => '3DD1T MU',
				'name' => '3X SEHARI 1 TABLET (JIKA MUAL)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			751 => 
			array (
				'codename' => '3DD1T PC',
				'name' => '3X SEHARI 1 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			752 => 
			array (
				'codename' => '3DD1T SA',
				'name' => '3X SEHARI 1 TABLET (SAKIT KEPALA/PUSING)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			753 => 
			array (
				'codename' => '3DD2.5ML AC',
				'name' => '3X SEHARI 2.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			754 => 
			array (
				'codename' => '3DD2.5ML BA',
				'name' => '3X SEHARI 2.5 ML (BATUK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			755 => 
			array (
				'codename' => '3DD2.5ML PC',
				'name' => '3X SEHARI 2.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			756 => 
			array (
				'codename' => '3DD20ML',
				'name' => '3X SEHARI 20 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			757 => 
			array (
				'codename' => '3DD20ML AC',
				'name' => '3X SEHARI 20 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			758 => 
			array (
				'codename' => '3DD20ML PC',
				'name' => '3X SEHARI 20 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			759 => 
			array (
				'codename' => '3DD25ML AC',
				'name' => '3X SEHARI 25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			760 => 
			array (
				'codename' => '3DD25ML PC',
				'name' => '3X SEHARI 25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			761 => 
			array (
				'codename' => '3DD2B',
				'name' => '3X SEHARI 2 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			762 => 
			array (
				'codename' => '3DD2B AC',
				'name' => '3X SEHARI 2 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			763 => 
			array (
				'codename' => '3DD2B PC',
				'name' => '3X SEHARI 2 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			764 => 
			array (
				'codename' => '3DD2C',
				'name' => '3X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			765 => 
			array (
				'codename' => '3DD2C AC',
				'name' => '3X SEHARI 2 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			766 => 
			array (
				'codename' => '3DD2G ADS',
				'name' => '3X SEHARI 2 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			767 => 
			array (
				'codename' => '3DD2G AS',
				'name' => '3X SEHARI 2 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			768 => 
			array (
				'codename' => '3DD2G MI',
				'name' => '3X SEHARI 2 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			769 => 
			array (
				'codename' => '3DD2G ND',
				'name' => '3X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			770 => 
			array (
				'codename' => '3DD2G NDS',
				'name' => '3X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			771 => 
			array (
				'codename' => '3DD2G NS',
				'name' => '3X SEHARI 2 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			772 => 
			array (
				'codename' => '3DD2G OD',
				'name' => '3X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			773 => 
			array (
				'codename' => '3DD2G ODS',
				'name' => '3X SEHARI 2 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			774 => 
			array (
				'codename' => '3DD2G OS',
				'name' => '3X SEHARI 2 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			775 => 
			array (
				'codename' => '3DD2I',
				'name' => '3X SEHARI 2 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			776 => 
			array (
				'codename' => '3DD2IJ',
				'name' => '3X SEHARI 2 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			777 => 
			array (
				'codename' => '3DD2ML',
				'name' => '3X SEHARI 2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			778 => 
			array (
				'codename' => '3DD2ML AC',
				'name' => '3X SEHARI 2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			779 => 
			array (
				'codename' => '3DD2ML PC',
				'name' => '3X SEHARI 2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			780 => 
			array (
				'codename' => '3DD2S',
				'name' => '3X SEHARI 2 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			781 => 
			array (
				'codename' => '3DD2T AC',
				'name' => '3X SEHARI 2 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			782 => 
			array (
				'codename' => '3DD2T PC',
				'name' => '3X SEHARI 2 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			783 => 
			array (
				'codename' => '3DD30ML',
				'name' => '3X SEHARI 30 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			784 => 
			array (
				'codename' => '3DD30ML AC',
				'name' => '3X SEHARI 30 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			785 => 
			array (
				'codename' => '3DD30ML PC',
				'name' => '3X SEHARI 30 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			786 => 
			array (
				'codename' => '3DD3B',
				'name' => '3X SEHARI 3 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			787 => 
			array (
				'codename' => '3DD3B AC',
				'name' => '3X SEHARI 3 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			788 => 
			array (
				'codename' => '3DD3B PC',
				'name' => '3X SEHARI 3 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			789 => 
			array (
				'codename' => '3DD3C AC',
				'name' => '3X SEHARI 3 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			790 => 
			array (
				'codename' => '3DD3C PC',
				'name' => '3X SEHARI 3 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			791 => 
			array (
				'codename' => '3DD8G MI',
				'name' => '3X SEHARI 8 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			792 => 
			array (
				'codename' => '3DD3G AD',
				'name' => '3X SEHARI 3 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			793 => 
			array (
				'codename' => '3DD3G ADS',
				'name' => '3X SEHARI 3 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			794 => 
			array (
				'codename' => '3DD3G AS',
				'name' => '3X SEHARI 3 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			795 => 
			array (
				'codename' => '3DD3G MI',
				'name' => '3X SEHARI 3 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			796 => 
			array (
				'codename' => '3DD3G ND',
				'name' => '3X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			797 => 
			array (
				'codename' => '3DD3G NDS',
				'name' => '3X SEHARI 3 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			798 => 
			array (
				'codename' => '3DD3G OD',
				'name' => '3X SEHARI 3 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			799 => 
			array (
				'codename' => '3DD3G ODS',
				'name' => '3X SEHARI 3 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			800 => 
			array (
				'codename' => '3DD3G OS',
				'name' => '3X SEHARI 3 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			801 => 
			array (
				'codename' => '3DD3IJ',
				'name' => '3X SEHARI 3 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			802 => 
			array (
				'codename' => '3DD3ML AC',
				'name' => '3X SEHARI 3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			803 => 
			array (
				'codename' => '3DD3ML PC',
				'name' => '3X SEHARI 3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			804 => 
			array (
				'codename' => '3DD3S',
				'name' => '3X SEHARI 3 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			805 => 
			array (
				'codename' => '3DD3T',
				'name' => '3X SEHARI 3 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			806 => 
			array (
				'codename' => '3DD3T AC',
				'name' => '3X SEHARI 3 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			807 => 
			array (
				'codename' => '3DD3T PC',
				'name' => '3X SEHARI 3 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			808 => 
			array (
				'codename' => '3DD4B',
				'name' => '3X SEHARI 4 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			809 => 
			array (
				'codename' => '3DD4G AD',
				'name' => '3X SEHARI 4 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			810 => 
			array (
				'codename' => '3DD4G ADS',
				'name' => '3X SEHARI 4 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			811 => 
			array (
				'codename' => '3DD4G AS',
				'name' => '3X SEHARI 4 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			812 => 
			array (
				'codename' => '3DD4G MI',
				'name' => '3X SEHARI 4 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			813 => 
			array (
				'codename' => '3DD4G ND',
				'name' => '3X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			814 => 
			array (
				'codename' => '3DD4G NDS',
				'name' => '3X SEHARI 4 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			815 => 
			array (
				'codename' => '3DD4G NS',
				'name' => '3X SEHARI 4 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			816 => 
			array (
				'codename' => '3DD4G OD',
				'name' => '3X SEHARI 4 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			817 => 
			array (
				'codename' => '3DD4G ODS',
				'name' => '3X SEHARI 4 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			818 => 
			array (
				'codename' => '3DD4G OS',
				'name' => '3X SEHARI 4 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			819 => 
			array (
				'codename' => '3DD4I',
				'name' => '3X SEHARI 4 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			820 => 
			array (
				'codename' => '3DD4IJ',
				'name' => '3X SEHARI 4 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			821 => 
			array (
				'codename' => '3DD4ML AB',
				'name' => '3X SEHARI 4 ML (ANTIBIOTIK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			822 => 
			array (
				'codename' => '3DD4ML AC',
				'name' => '3X SEHARI 4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			823 => 
			array (
				'codename' => '3DD4ML PC',
				'name' => '3X SEHARI 4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			824 => 
			array (
				'codename' => '3DD4S',
				'name' => '3X SEHARI 4 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			825 => 
			array (
				'codename' => '3DD4T',
				'name' => '3X SEHARI 4 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			826 => 
			array (
				'codename' => '4DD2.5ML',
				'name' => '4X SEHARI 2.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			827 => 
			array (
				'codename' => '3DD4T AC',
				'name' => '3X SEHARI 4 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			828 => 
			array (
				'codename' => '3DD4T PC',
				'name' => '3X SEHARI 4 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			829 => 
			array (
				'codename' => '3DD5B',
				'name' => '3X SEHARI 5 BUNGKUS',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			830 => 
			array (
				'codename' => '3DD5B AC',
				'name' => '3X SEHARI 5 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			831 => 
			array (
				'codename' => '3DD5B PC',
				'name' => '3X SEHARI 5 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			832 => 
			array (
				'codename' => '3DD5C',
				'name' => '3X SEHARI 5 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			833 => 
			array (
				'codename' => '3DD5C AC',
				'name' => '3X SEHARI 5 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			834 => 
			array (
				'codename' => '3DD5C PC',
				'name' => '3X SEHARI 5 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			835 => 
			array (
				'codename' => '3DD5G AD',
				'name' => '3X SEHARI 5 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			836 => 
			array (
				'codename' => '3DD5G ADS',
				'name' => '3X SEHARI 5 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			837 => 
			array (
				'codename' => '3DD5G AS',
				'name' => '3X SEHARI 5 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			838 => 
			array (
				'codename' => '3DD5G MI',
				'name' => '3X SEHARI 5 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			839 => 
			array (
				'codename' => '3DD5G ND',
				'name' => '3X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			840 => 
			array (
				'codename' => '1DD4T M',
				'name' => '1X SEHARI 4 TABLET (MALAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			841 => 
			array (
				'codename' => '3DD5G NDS',
				'name' => '3X SEHARI 5 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			842 => 
			array (
				'codename' => '3DD5G NS',
				'name' => '3X SEHARI 5 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			843 => 
			array (
				'codename' => '3DD5G OD',
				'name' => '3X SEHARI 5 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			844 => 
			array (
				'codename' => '3DD5G ODS',
				'name' => '3X SEHARI 5 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			845 => 
			array (
				'codename' => '3DD5G OS',
				'name' => '3X SEHARI 5 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			846 => 
			array (
				'codename' => '3DD5I',
				'name' => '3X SEHARI 5 INHALASI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			847 => 
			array (
				'codename' => '3DD5IJ',
				'name' => '3X SEHARI 5 INJEKSI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			848 => 
			array (
				'codename' => '3DD5ML AB',
				'name' => '3X SEHARI 5 ML (ANTI-BIOTIK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			849 => 
			array (
				'codename' => '3DD5ML AC',
				'name' => '3X SEHARI 5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			850 => 
			array (
				'codename' => '3DD5ML BA',
				'name' => '3X SEHARI 5 ML (BATUK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			851 => 
			array (
				'codename' => '3DD5ML BP',
				'name' => '3X SEHARI 5 ML (BATUK DAN PILEK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			852 => 
			array (
				'codename' => '3DD5ML DE',
				'name' => '3X SEHARI 5 ML (PANAS/DEMAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			853 => 
			array (
				'codename' => '4DD5T',
				'name' => '4X SEHARI 5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			854 => 
			array (
				'codename' => '3DD5ML DI',
				'name' => '3X SEHARI 5 ML (DIARE)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			855 => 
			array (
				'codename' => '3DD5ML MU',
				'name' => '3X SEHARI 5 ML (MUNTAH)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			856 => 
			array (
				'codename' => '3DD5ML PC',
				'name' => '3X SEHARI 5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			857 => 
			array (
				'codename' => '3DD5ML PI',
				'name' => '3X SEHARI 5 ML (PILEK)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			858 => 
			array (
				'codename' => '3DD5ML VI',
				'name' => '3X SEHARI 5 ML (VITAMIN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			859 => 
			array (
				'codename' => '3DD5S',
				'name' => '3X SEHARI 5 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			860 => 
			array (
				'codename' => '3DD5T',
				'name' => '3X SEHARI 5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			861 => 
			array (
				'codename' => '3DD5T AC',
				'name' => '3X SEHARI 5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			862 => 
			array (
				'codename' => '3DD5T PC',
				'name' => '3X SEHARI 5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			863 => 
			array (
				'codename' => '1DD12ML AC',
				'name' => '1X SEHARI 12 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			864 => 
			array (
				'codename' => '3DD6B AC',
				'name' => '3X SEHARI 6 BUNGKUS (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			865 => 
			array (
				'codename' => '3DD6B PC',
				'name' => '3X SEHARI 6 BUNGKUS (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			866 => 
			array (
				'codename' => '3DD6C',
				'name' => '3X SEHARI 6 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			867 => 
			array (
				'codename' => '3DD6C AC',
				'name' => '3X SEHARI 6 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			868 => 
			array (
				'codename' => '3DD6C PC',
				'name' => '3X SEHARI 6 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			869 => 
			array (
				'codename' => '3DD6G AD',
				'name' => '3X SEHARI 6 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			870 => 
			array (
				'codename' => '3DD6G ADS',
				'name' => '3X SEHARI 6 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			871 => 
			array (
				'codename' => '3DD6G AS',
				'name' => '3X SEHARI 6 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			872 => 
			array (
				'codename' => '3DD6G MI',
				'name' => '3X SEHARI 6 TETES (DIMINUM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			873 => 
			array (
				'codename' => '3DD6G ND',
				'name' => '3X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			874 => 
			array (
				'codename' => '3DD6G NDS',
				'name' => '3X SEHARI 6 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			875 => 
			array (
				'codename' => '3DD6G NS',
				'name' => '3X SEHARI 6 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			876 => 
			array (
				'codename' => '3DD6G OD',
				'name' => '3X SEHARI 6 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			877 => 
			array (
				'codename' => '3DD6G ODS',
				'name' => '3X SEHARI 6 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			878 => 
			array (
				'codename' => '3DD6G OS',
				'name' => '3X SEHARI 6 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			879 => 
			array (
				'codename' => '3DD6ML AC',
				'name' => '3X SEHARI 6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			880 => 
			array (
				'codename' => '3DD6ML PC',
				'name' => '3X SEHARI 6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			881 => 
			array (
				'codename' => '3DD6S',
				'name' => '3X SEHARI 6 SEMPROT HIDUNG',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			882 => 
			array (
				'codename' => '3DD6T AC',
				'name' => '3X SEHARI 6 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			883 => 
			array (
				'codename' => '3DD6T PC',
				'name' => '3X SEHARI 6 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			884 => 
			array (
				'codename' => '3DD7.5ML',
				'name' => '3X SEHARI 7.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			885 => 
			array (
				'codename' => '3DD7.5ML AC',
				'name' => '3X SEHARI 7.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			886 => 
			array (
				'codename' => '3DD7.5ML PC',
				'name' => '3X SEHARI 7.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			887 => 
			array (
				'codename' => '3DD7ML',
				'name' => '3X SEHARI 7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			888 => 
			array (
				'codename' => '3DD7ML AC',
				'name' => '3X SEHARI 7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			889 => 
			array (
				'codename' => '3DD7ML PC',
				'name' => '3X SEHARI 7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			890 => 
			array (
				'codename' => '3DD8ML AC',
				'name' => '3X SEHARI 8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			891 => 
			array (
				'codename' => '3DD8ML PC',
				'name' => '3X SEHARI 8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			892 => 
			array (
				'codename' => '3DDO SA',
				'name' => 'OLESKAN 3X SEHARI (PADA BAGIAN YANG SAKIT)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			893 => 
			array (
				'codename' => '3DDOL Z OD',
				'name' => 'OLESKAN ZALF 3X SEHARI PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			894 => 
			array (
				'codename' => '3DDOL Z ODS',
				'name' => 'OLESKAN ZALF 3X SEHARI PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			895 => 
			array (
				'codename' => '3DDOL Z OS',
				'name' => 'OLESKAN ZALF 3X SEHARI PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			896 => 
			array (
				'codename' => '46DD0.25ML',
				'name' => '4-6X SEHARI 0.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			897 => 
			array (
				'codename' => '46DD0.2ML',
				'name' => '4-6X SEHARI 0.2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			898 => 
			array (
				'codename' => '46DD0.3ML',
				'name' => '4-6X SEHARI 0.3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			899 => 
			array (
				'codename' => '46DD0.4ML',
				'name' => '4-6X SEHARI 0.4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			900 => 
			array (
				'codename' => '46DD0.5ML',
				'name' => '4-6X SEHARI 0.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			901 => 
			array (
				'codename' => '46DD0.6ML',
				'name' => '4-6X SEHARI 0.6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			902 => 
			array (
				'codename' => '46DD0.7ML',
				'name' => '4-6X SEHARI 0.7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			903 => 
			array (
				'codename' => '46DD1ML DE',
				'name' => '4-6X SEHARI 1 ML (PANAS/DEMAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			904 => 
			array (
				'codename' => '46DD2.5ML',
				'name' => '4-6X SEHARI 2.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			905 => 
			array (
				'codename' => '5DD0.6ML AC',
				'name' => '5X SEHARI 0.6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			906 => 
			array (
				'codename' => '46DD5ML DE',
				'name' => '4-6X SEHARI 5 ML (PANAS/DEMAM)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			907 => 
			array (
				'codename' => '4DD0.1ML AC',
				'name' => '4X SEHARI 0.1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			908 => 
			array (
				'codename' => '4DD0.1ML PC',
				'name' => '4X SEHARI 0.1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			909 => 
			array (
				'codename' => '4DD0.25ML',
				'name' => '4X SEHARI 0.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			910 => 
			array (
				'codename' => '4DD0.25ML AC',
				'name' => '4X SEHARI 0.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			911 => 
			array (
				'codename' => '4DD0.25ML PC',
				'name' => '4X SEHARI 0.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			912 => 
			array (
				'codename' => '4DD0.25T',
				'name' => '4X SEHARI 0.25 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			913 => 
			array (
				'codename' => '4DD0.25T PC',
				'name' => '4X SEHARI 0.25 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			914 => 
			array (
				'codename' => '4DD0.2ML AC',
				'name' => '4X SEHARI 0.2 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			915 => 
			array (
				'codename' => '4DD0.2ML PC',
				'name' => '4X SEHARI 0.2 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			916 => 
			array (
				'codename' => '4DD0.3ML',
				'name' => '4X SEHARI 0.3 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			917 => 
			array (
				'codename' => '4DD0.3ML AC',
				'name' => '4X SEHARI 0.3 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			918 => 
			array (
				'codename' => '4DD0.3ML PC',
				'name' => '4X SEHARI 0.3 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			919 => 
			array (
				'codename' => '4DD0.4ML AC',
				'name' => '4X SEHARI 0.4 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			920 => 
			array (
				'codename' => '4DD0.4ML PC',
				'name' => '4X SEHARI 0.4 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			921 => 
			array (
				'codename' => '4DD0.5ML',
				'name' => '4X SEHARI 0.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			922 => 
			array (
				'codename' => '4DD0.5ML AC',
				'name' => '4X SEHARI 0.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			923 => 
			array (
				'codename' => '4DD0.5ML PC',
				'name' => '4X SEHARI 0.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			924 => 
			array (
				'codename' => '4DD0.5T',
				'name' => '4X SEHARI 0.5 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			925 => 
			array (
				'codename' => '4DD0.5T AC',
				'name' => '4X SEHARI 0.5 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			926 => 
			array (
				'codename' => '4DD0.5T PC',
				'name' => '4X SEHARI 0.5 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			927 => 
			array (
				'codename' => '4DD0.6ML',
				'name' => '4X SEHARI 0.6 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			928 => 
			array (
				'codename' => '4DD0.6ML AC',
				'name' => '4X SEHARI 0.6 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			929 => 
			array (
				'codename' => '4DD0.6ML PC',
				'name' => '4X SEHARI 0.6 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			930 => 
			array (
				'codename' => '4DD0.75T',
				'name' => '4X SEHARI 0.75 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			931 => 
			array (
				'codename' => '4DD0.75T AC',
				'name' => '4X SEHARI 0.75 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			932 => 
			array (
				'codename' => '4DD0.75T PC',
				'name' => '4X SEHARI 0.75 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			933 => 
			array (
				'codename' => '4DD0.7ML',
				'name' => '4X SEHARI 0.7 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			934 => 
			array (
				'codename' => '4DD0.7ML AC',
				'name' => '4X SEHARI 0.7 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			935 => 
			array (
				'codename' => '46DD0.1ML',
				'name' => '4-6X SEHARI 0.1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			936 => 
			array (
				'codename' => '4DD0.7ML PC',
				'name' => '4X SEHARI 0.7 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			937 => 
			array (
				'codename' => '4DD0.8ML AC',
				'name' => '4X SEHARI 0.8 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			938 => 
			array (
				'codename' => '4DD0.8ML PC',
				'name' => '4X SEHARI 0.8 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			939 => 
			array (
				'codename' => '4DD1.25ML',
				'name' => '4X SEHARI 1.25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			940 => 
			array (
				'codename' => '4DD1.25ML AC',
				'name' => '4X SEHARI 1.25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			941 => 
			array (
				'codename' => '4DD1.25ML PC',
				'name' => '4X SEHARI 1.25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			942 => 
			array (
				'codename' => '4DD1.5ML AC',
				'name' => '4X SEHARI 1.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			943 => 
			array (
				'codename' => '4DD1.5ML PC',
				'name' => '4X SEHARI 1.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			944 => 
			array (
				'codename' => '4DD10G OD',
				'name' => '4X SEHARI 10 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			945 => 
			array (
				'codename' => '4DD10G ODS',
				'name' => '4X SEHARI 10 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			946 => 
			array (
				'codename' => '3DD4ML',
				'name' => '3X SEHARI 4 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			947 => 
			array (
				'codename' => '4DD10G OS',
				'name' => '4X SEHARI 10 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			948 => 
			array (
				'codename' => '4DD10ML AC',
				'name' => '4X SEHARI 10 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			949 => 
			array (
				'codename' => '4DD10ML PC',
				'name' => '4X SEHARI 10 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			950 => 
			array (
				'codename' => '4DD12ML',
				'name' => '4X SEHARI 12 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			951 => 
			array (
				'codename' => '4DD12ML AC',
				'name' => '4X SEHARI 12 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			952 => 
			array (
				'codename' => '4DD12ML PC',
				'name' => '4X SEHARI 12 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			953 => 
			array (
				'codename' => '4DD15ML AC',
				'name' => '4X SEHARI 15 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			954 => 
			array (
				'codename' => '4DD15ML PC',
				'name' => '4X SEHARI 15 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			955 => 
			array (
				'codename' => '4DD1B AV',
				'name' => '4X SEHARI 1 BUNGKUS (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			956 => 
			array (
				'codename' => '4DD1C',
				'name' => '4X SEHARI 1 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			957 => 
			array (
				'codename' => '5DD10ML',
				'name' => '5X SEHARI 10 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			958 => 
			array (
				'codename' => '4DD1C AC',
				'name' => '4X SEHARI 1 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			959 => 
			array (
				'codename' => '4DD1C PC',
				'name' => '4X SEHARI 1 KAPSUL (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			960 => 
			array (
				'codename' => '4DD1G AD',
				'name' => '4X SEHARI 1 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			961 => 
			array (
				'codename' => '4DD1G ADS',
				'name' => '4X SEHARI 1 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			962 => 
			array (
				'codename' => '4DD1G AS',
				'name' => '4X SEHARI 1 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			963 => 
			array (
				'codename' => '4DD1G ND',
				'name' => '4X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			964 => 
			array (
				'codename' => '4DD1G NDS',
				'name' => '4X SEHARI 1 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			965 => 
			array (
				'codename' => '4DD1G NS',
				'name' => '4X SEHARI 1 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			966 => 
			array (
				'codename' => '4DD1G OD',
				'name' => '4X SEHARI 1 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			967 => 
			array (
				'codename' => '5DD1.5ML',
				'name' => '5X SEHARI 1.5 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			968 => 
			array (
				'codename' => '4DD1G ODS',
				'name' => '4X SEHARI 1 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			969 => 
			array (
				'codename' => '4DD1G OS',
				'name' => '4X SEHARI 1 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			970 => 
			array (
				'codename' => '4DD1ML',
				'name' => '4X SEHARI 1 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			971 => 
			array (
				'codename' => '4DD1ML AC',
				'name' => '4X SEHARI 1 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			972 => 
			array (
				'codename' => '6DD2C',
				'name' => '6X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			973 => 
			array (
				'codename' => '4DD1ML PC',
				'name' => '4X SEHARI 1 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			974 => 
			array (
				'codename' => '4DD1SUP',
				'name' => '4X SEHARI 1 SUPPOSITORIA',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			975 => 
			array (
				'codename' => '4DD1T',
				'name' => '4X SEHARI 1 TABLET',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			976 => 
			array (
				'codename' => '4DD1T AC',
				'name' => '4X SEHARI 1 TABLET (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			977 => 
			array (
				'codename' => '4DD1T AV',
				'name' => '4X SEHARI 1 TABLET (ANTI-VIRUS)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			978 => 
			array (
				'codename' => '4DD1T PC',
				'name' => '4X SEHARI 1 TABLET (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			979 => 
			array (
				'codename' => '4DD2.5ML AC',
				'name' => '4X SEHARI 2.5 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			980 => 
			array (
				'codename' => '4DD2.5ML PC',
				'name' => '4X SEHARI 2.5 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			981 => 
			array (
				'codename' => '4DD20ML',
				'name' => '4X SEHARI 20 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			982 => 
			array (
				'codename' => '4DD20ML AC',
				'name' => '4X SEHARI 20 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			983 => 
			array (
				'codename' => '4DD20ML PC',
				'name' => '4X SEHARI 20 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			984 => 
			array (
				'codename' => '4DD25ML',
				'name' => '4X SEHARI 25 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			985 => 
			array (
				'codename' => '4DD25ML AC',
				'name' => '4X SEHARI 25 ML (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			986 => 
			array (
				'codename' => '4DD25ML PC',
				'name' => '4X SEHARI 25 ML (SETELAH MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			987 => 
			array (
				'codename' => '4DD2C',
				'name' => '4X SEHARI 2 KAPSUL',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			988 => 
			array (
				'codename' => '4DD2C AC',
				'name' => '4X SEHARI 2 KAPSUL (SEBELUM MAKAN)',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			989 => 
			array (
				'codename' => '4DD2G AD',
				'name' => '4X SEHARI 2 TETES PADA TELINGA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			990 => 
			array (
				'codename' => '4DD2G ADS',
				'name' => '4X SEHARI 2 TETES PADA TELINGA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			991 => 
			array (
				'codename' => '4DD2G AS',
				'name' => '4X SEHARI 2 TETES PADA TELINGA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			992 => 
			array (
				'codename' => '4DD2G ND',
				'name' => '4X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			993 => 
			array (
				'codename' => '4DD2G NDS',
				'name' => '4X SEHARI 2 TETES PADA LUBANG HIDUNG KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			994 => 
			array (
				'codename' => '4DD2G NS',
				'name' => '4X SEHARI 2 TETES PADA LUBANG HIDUNG KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			995 => 
			array (
				'codename' => '4DD2G OD',
				'name' => '4X SEHARI 2 TETES PADA MATA KANAN',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			996 => 
			array (
				'codename' => '4DD2G ODS',
				'name' => '4X SEHARI 2 TETES PADA MATA KANAN DAN KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			997 => 
			array (
				'codename' => '4DD2G OS',
				'name' => '4X SEHARI 2 TETES PADA MATA KIRI',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			998 => 
			array (
				'codename' => '4DD2ML',
				'name' => '4X SEHARI 2 ML',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
		);
		foreach ($data as $i){
			$signa = Signa::create($i);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('signas', function($table)
		{
			$table->truncate();
		});
	}
};
