<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Medicine;

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
				'codename' => 'ALK00000614',
				'name' => 'KASSA NON-XRAY 10 CM X 10 CM',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1 =>
			array (
				'codename' => 'ALK00000776',
				'name' => 'POLYSORB 1 CL905',
				'stock' => '1430',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2 =>
			array (
				'codename' => 'ALK00000741',
				'name' => 'VICRYL PLUS 2-0 VCP317 TAPER',
				'stock' => '1307',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			3 =>
			array (
				'codename' => 'ALK00000095',
				'name' => 'CADD EXTENSION SET 76 CM/ 30 IN (21-7045-24)',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			4 =>
			array (
				'codename' => 'OBT00000392',
				'name' => 'MINIRIN DROP/SPRAY',
				'stock' => '3905',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			5 =>
			array (
				'codename' => 'OBT00000581',
				'name' => 'VAKSIN PENTABIO',
				'stock' => '1446',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			6 =>
			array (
				'codename' => 'OBT00000559',
				'name' => 'TRIATEC 2,5 MG TABLET',
				'stock' => '91',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			7 =>
			array (
				'codename' => 'OBT00000746',
				'name' => 'MYLANTA TAB',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			8 =>
			array (
				'codename' => 'ALK00000449',
				'name' => 'OKSIGEN NASAL CANUL PED 1602/3232',
				'stock' => '170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			9 =>
			array (
				'codename' => 'ALK00000012',
				'name' => 'ABBOCATH-T 14 G ORANGE (G713A01)-ABBOTT',
				'stock' => '308',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			10 =>
			array (
				'codename' => 'OBT00000385',
				'name' => 'MEYLON 8,4% INJEKSI 25 ML',
				'stock' => '198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			11 =>
			array (
				'codename' => 'OBT00000991',
				'name' => 'CENDO PITHALMIC 10MG/GRAM 5MG EYE GEL',
				'stock' => '762',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			12 =>
			array (
				'codename' => 'ALK00000610',
				'name' => 'NITRILE EXAMINATION POWDER FREE LARGE',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			13 =>
			array (
				'codename' => 'OBT00000544',
				'name' => 'THROMBOPHOB OINMENT 15 GRAM',
				'stock' => '404',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			14 =>
			array (
				'codename' => 'OBT00000400',
				'name' => 'MUCOPECT DROPS 20 ML',
				'stock' => '603',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			15 =>
			array (
				'codename' => 'OBT00000391',
				'name' => 'MINIRIN 0.1 MG TAB',
				'stock' => '291',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			16 =>
			array (
				'codename' => 'A009',
				'name' => 'Amoxcilin',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			17 =>
			array (
				'codename' => 'BBK00000095',
				'name' => 'PARAFILM KECIL',
				'stock' => '6325',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			18 =>
			array (
				'codename' => 'OBT00000384',
				'name' => 'METHYCOBAL 500 Mcg/ML INJ',
				'stock' => '321',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			19 =>
			array (
				'codename' => 'OBT00000637',
				'name' => 'VAKSIN INFANRIX HEXA INJ',
				'stock' => '5587',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			20 =>
			array (
				'codename' => 'ALK00000649',
				'name' => 'POLYSORB 3-0 GL 182 (TAPPER)',
				'stock' => '1056',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			21 =>
			array (
				'codename' => 'ALK00000646',
				'name' => 'VICRYL 3-0 W9511T',
				'stock' => '27260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			22 =>
			array (
				'codename' => 'A5879',
				'name' => 'Oxomemazine - M3',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			23 =>
			array (
				'codename' => 'OBT00000730',
				'name' => 'SUSU PEPTISOL 190 GR COKLAT',
				'stock' => '561',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			24 =>
			array (
				'codename' => 'ALK00000644',
				'name' => 'PLAIN GUT 4-0 UG207',
				'stock' => '968',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			25 =>
			array (
				'codename' => 'ALK00000611',
				'name' => 'UMBILICAL CORD CLAMP JMS',
				'stock' => '455',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			26 =>
			array (
				'codename' => 'ALK00000559',
				'name' => 'THERMOMETER DIGITAL GC/FLEXIBLE',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			27 =>
			array (
				'codename' => 'ALK00000525',
				'name' => 'STOMACH TUBE SILICONE NO 08',
				'stock' => '2585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			28 =>
			array (
				'codename' => 'ALK00000466',
				'name' => 'PROLENE 2-0 W8623',
				'stock' => '2088',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			29 =>
			array (
				'codename' => 'OBT00000632',
				'name' => 'VAKSIN CERVARIX INJ 0,5 ML',
				'stock' => '6685',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			30 =>
			array (
				'codename' => 'BBK00000025',
				'name' => 'ANTI B MONOCLONAL (ABO 020)',
				'stock' => '792',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			31 =>
			array (
				'codename' => 'OBT00000635',
				'name' => 'VAKSIN EUVAX B 10 MCG/0,5 ML  /',
				'stock' => '584',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			32 =>
			array (
				'codename' => 'B009',
				'name' => 'Ampicillin',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			33 =>
			array (
				'codename' => 'BBK00000170',
				'name' => 'CMV M ( VIDAS 30205 )',
				'stock' => '41250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			34 =>
			array (
				'codename' => 'A007',
				'name' => 'Heparin',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			35 =>
			array (
				'codename' => 'A030',
				'name' => 'XANAX 1405',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			36 =>
			array (
				'codename' => 'A004',
				'name' => 'Albumin',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			37 =>
			array (
				'codename' => 'BBK00000167',
				'name' => 'CELLPACK DCL (XN CT661628)',
				'stock' => '35640',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			38 =>
			array (
				'codename' => 'ALK00000613',
				'name' => 'KASSA XRAY 7.5 CM X 7.5 CM',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			39 =>
			array (
				'codename' => 'OBT00000383',
				'name' => 'METHYCOBAL 500 MCG CAP',
				'stock' => '39',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			40 =>
			array (
				'codename' => 'OBT00000382',
				'name' => 'MEROFEN 1 GR INJ',
				'stock' => '5390',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			41 =>
			array (
				'codename' => 'A023',
				'name' => 'Jarum Suntik 2mm',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			42 =>
			array (
				'codename' => 'BBK00000165',
				'name' => 'CEA (CENTAUR 10309977)',
				'stock' => '43110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			43 =>
			array (
				'codename' => 'A073',
				'name' => 'CALSICAL TAB',
				'stock' => '63',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			44 =>
			array (
				'codename' => 'OBT00000629',
				'name' => 'SYNTOCINON 10 IU/ML INJEKSI',
				'stock' => '139',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			45 =>
			array (
				'codename' => 'BBK00000160',
				'name' => 'BIL TOTAL (COBAS 3146022122)',
				'stock' => '13965',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			46 =>
			array (
				'codename' => 'OBT00000625',
				'name' => 'PLASBUMIN 25% 100 ML',
				'stock' => '23078',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			47 =>
			array (
				'codename' => 'BBK00000035',
				'name' => 'BENEDICT ',
				'stock' => '465',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			48 =>
			array (
				'codename' => 'OBT00000615',
				'name' => 'ZOVIRAX 5% 2GR CREAM',
				'stock' => '678',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			49 =>
			array (
				'codename' => 'A048',
				'name' => 'Citicoline',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			50 =>
			array (
				'codename' => 'BBK00000032',
				'name' => 'BACTEC AEROBIC/F50/PK F/G BD 442192',
				'stock' => '595',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			51 =>
			array (
				'codename' => 'OBT00000614',
				'name' => 'ZOLOFT 50 MG TABLET',
				'stock' => '215',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			52 =>
			array (
				'codename' => 'OBT00000380',
				'name' => 'MEPTIN SYR 60 ML',
				'stock' => '520',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			53 =>
			array (
				'codename' => 'A008',
				'name' => 'Gliserol',
				'stock' => '70',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			54 =>
			array (
				'codename' => 'BBK00000184',
				'name' => 'HCV (CENTAUR 10309061)',
				'stock' => '271598',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			55 =>
			array (
				'codename' => 'ALK00000605',
				'name' => 'TABUNG SST GEL M ML',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			56 =>
			array (
				'codename' => 'BBK00000182',
				'name' => 'HbSAG (CENTAUR)-(10309057)',
				'stock' => '147408',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			57 =>
			array (
				'codename' => 'A057',
				'name' => 'ZIGAT TAB 400 MG',
				'stock' => '493',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			58 =>
			array (
				'codename' => 'OBT00000610',
				'name' => 'XARELTO 20 MG TAB',
				'stock' => '331',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			59 =>
			array (
				'codename' => 'OBT00000378',
				'name' => 'MEFINAL 500 MG TAB',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			60 =>
			array (
				'codename' => 'BBK00000031',
				'name' => 'ASO. LATEX 50 TEST FASO 100',
				'stock' => '6105',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			61 =>
			array (
				'codename' => 'A5918',
				'name' => 'PARACETAMOL 500 MG - TEST',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			62 =>
			array (
				'codename' => 'A074',
				'name' => 'CLARITIN TABLET',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			63 =>
			array (
				'codename' => 'ALK00000588',
				'name' => 'VIOREX NORINSE 500 ML',
				'stock' => '968',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			64 =>
			array (
				'codename' => 'OBT00000208',
				'name' => 'DIPROSONE OV 0,05% CREAM 10 GRAM',
				'stock' => '998',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			65 =>
			array (
				'codename' => 'OBT00000759',
				'name' => 'ACRAN FC 150 MG TAB',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			66 =>
			array (
				'codename' => 'OBT00000607',
				'name' => 'XANAX 0.5 MG TAB',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			67 =>
			array (
				'codename' => 'OBT00000371',
				'name' => 'MANITOL 20% INFUS 500ML',
				'stock' => '970',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			68 =>
			array (
				'codename' => 'BBK00000150',
				'name' => 'VIDAS FT4',
				'stock' => '93500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			69 =>
			array (
				'codename' => 'OBT00000606',
				'name' => 'VOSEDON 5 MG/5 ML SYR 60 ML',
				'stock' => '305',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			70 =>
			array (
				'codename' => 'OBT00000360',
				'name' => 'LIPITOR 20 MG TAB',
				'stock' => '185',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			71 =>
			array (
				'codename' => 'OBT00000740',
				'name' => 'SUSU PEDIASURE 400 GR VANILLA',
				'stock' => '1348',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			72 =>
			array (
				'codename' => 'ALK00000587',
				'name' => 'VIOREX LIQUID (HANDSCRUB) 4 % - 500 ML',
				'stock' => '962',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			73 =>
			array (
				'codename' => 'A003',
				'name' => 'Ranitidin',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			74 =>
			array (
				'codename' => 'OBT00001032',
				'name' => 'INTUNAL FORTE TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			75 =>
			array (
				'codename' => 'BBK00000177',
				'name' => 'FLUOROCELL WDF (XN CV377552)',
				'stock' => '89100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			76 =>
			array (
				'codename' => 'ALK00000990',
				'name' => 'LMA PROSEAL SIZE 2.5 NEW',
				'stock' => '5500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			77 =>
			array (
				'codename' => 'OBT00001065',
				'name' => 'CYGEST 200MCG SUP',
				'stock' => '146',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			78 =>
			array (
				'codename' => 'OBT00001035',
				'name' => 'KETRICIN 4 MG TAB',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			79 =>
			array (
				'codename' => 'ALK00000971',
				'name' => 'KAPSUL KOSONG 1',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			80 =>
			array (
				'codename' => 'OBT00000370',
				'name' => 'MANITOL 20% 250ML INFUS',
				'stock' => '606',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			81 =>
			array (
				'codename' => 'BBK00000293',
				'name' => 'VTM + SWAB OROPHARINX',
				'stock' => '715',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			82 =>
			array (
				'codename' => 'ALK00000985',
				'name' => 'LIGAMAX 5 MULTIPLE CLIP APPLIER EL5ML',
				'stock' => '44055',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			83 =>
			array (
				'codename' => 'OBT00001037',
				'name' => 'KY JELLY GEL 50 GR',
				'stock' => '620',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			84 =>
			array (
				'codename' => 'OBT00001101',
				'name' => 'ZOLMIA 10 MG TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			85 =>
			array (
				'codename' => 'OBT00001005',
				'name' => 'OCUSON TAB',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			86 =>
			array (
				'codename' => 'BBK00000148',
				'name' => 'VIDAS Ca 15.3 (30429)',
				'stock' => '61897',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			87 =>
			array (
				'codename' => 'OBT00001262',
				'name' => 'Neo HP PRO CAP',
				'stock' => '59',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			88 =>
			array (
				'codename' => 'ALK00000609',
				'name' => 'NITRILE EXAMINATION POWDER FREE MEDIUM',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			89 =>
			array (
				'codename' => 'ALK00000465',
				'name' => 'PROLENE 2-0 TAPER (8833H)',
				'stock' => '1323',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			90 =>
			array (
				'codename' => 'ALK00000463',
				'name' => 'PROCEED SURGICAL MESH 15 CM X 15 CM (PCDM-1)',
				'stock' => '75900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			91 =>
			array (
				'codename' => 'BBK00000173',
				'name' => 'CUVETTE (SUC-400A) (CS2100i)',
				'stock' => '15180',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			92 =>
			array (
				'codename' => 'CGN00000002',
				'name' => 'KN-LOCKING SCREW 3.5 X 20 MM (218.0103520.25)',
				'stock' => '6352',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			93 =>
			array (
				'codename' => 'ALK00000458',
				'name' => 'POLYSORB 3-0 GL 182 (TAPPER)',
				'stock' => '1056',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			94 =>
			array (
				'codename' => 'BBK00000168',
				'name' => 'CHOLESTEROL (COBAS 3039773190)',
				'stock' => '23076',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			95 =>
			array (
				'codename' => 'A034',
				'name' => 'Lipitor',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			96 =>
			array (
				'codename' => 'OBT00001270',
				'name' => 'TROVENSIS 8 MG TAB',
				'stock' => '129',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			97 =>
			array (
				'codename' => 'OBT00001263',
				'name' => 'PROVITAL PLUS TAB',
				'stock' => '51',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			98 =>
			array (
				'codename' => 'B008',
				'name' => 'Salbutamol',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			99 =>
			array (
				'codename' => 'A028',
				'name' => 'Tramadol',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			100 =>
			array (
				'codename' => 'ALK00000608',
				'name' => 'NITRILE EXAMINATION POWDER FREE SMALL',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			101 =>
			array (
				'codename' => 'OBT00000995',
				'name' => 'KCL INJ 25 CC',
				'stock' => '91',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			102 =>
			array (
				'codename' => 'A001',
				'name' => 'Morphine',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			103 =>
			array (
				'codename' => 'BBK00000024',
				'name' => 'ANTI AB MONOCLONAL (ABO 030)',
				'stock' => '803',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			104 =>
			array (
				'codename' => 'ALK00000453',
				'name' => 'PENROSE DRAIN 8MM (PEDIATRIC)',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			105 =>
			array (
				'codename' => 'ALK00000450',
				'name' => 'OKSIGEN NASAL NEONATAL 1164',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			106 =>
			array (
				'codename' => 'A002',
				'name' => 'Ampicilin',
				'stock' => '911',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			107 =>
			array (
				'codename' => 'OBT00000320',
				'name' => 'JANUVIA 100 MG TAB',
				'stock' => '152',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			108 =>
			array (
				'codename' => 'BBK00000023',
				'name' => 'ANTI A MONOCLONAL (ABO 010)',
				'stock' => '803',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			109 =>
			array (
				'codename' => 'BBK00000020',
				'name' => 'AMIES COLLECTION SWAB ABL',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			110 =>
			array (
				'codename' => 'ALK00001665',
				'name' => 'MASKER 3M 9320 AURA',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			111 =>
			array (
				'codename' => 'ALK00000374',
				'name' => 'HYPAVIX 15CM X 5M',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			112 =>
			array (
				'codename' => 'OBT00000191',
				'name' => 'DEXTROSE 10% (1/5 NS) OTSUKA',
				'stock' => '168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			113 =>
			array (
				'codename' => 'BBK00000163',
				'name' => 'CAL D(CENTAUR)',
				'stock' => '22905',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			114 =>
			array (
				'codename' => 'ALK00000445',
				'name' => 'NURSE CAP (BLUE)',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			115 =>
			array (
				'codename' => 'OBT00000587',
				'name' => 'VASCON 1 MG /ML INJ 4 ML',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			116 =>
			array (
				'codename' => 'OBT00000583',
				'name' => 'VALISANBE 10 MG/2 ML INJ#',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			117 =>
			array (
				'codename' => 'ALK00000372',
				'name' => 'HYDROX HUMIDIFIER 450 ML',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			118 =>
			array (
				'codename' => 'OBT00000368',
				'name' => 'MAGNESIUM SULFAT 40% INJ 25 CC (MGSO4)',
				'stock' => '87',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			119 =>
			array (
				'codename' => 'A025',
				'name' => 'Insulin',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			120 =>
			array (
				'codename' => 'BBK00000162',
				'name' => 'CA Clean I (GSA 500A CS 96406313)',
				'stock' => '10604',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			121 =>
			array (
				'codename' => 'OBT00000185',
				'name' => 'DEPAKENE 250 MG/5 ML SYR 120 ML',
				'stock' => '1724',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			122 =>
			array (
				'codename' => 'BBK00000159',
				'name' => 'AST (COBAS 20764949322)',
				'stock' => '21945',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			123 =>
			array (
				'codename' => 'BBK00000157',
				'name' => 'ANCLRY PROBE WASH 1(CENTAUR)',
				'stock' => '13438',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			124 =>
			array (
				'codename' => 'OBT00000744',
				'name' => 'MEROFEN 0.5 GR INJ',
				'stock' => '2310',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			125 =>
			array (
				'codename' => 'A5923',
				'name' => 'Melon Water',
				'stock' => '80',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			126 =>
			array (
				'codename' => 'B002',
				'name' => 'Ambroxol 1405',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			127 =>
			array (
				'codename' => 'ALK00000440',
				'name' => 'NEEDLE 25G X 5/8 TERUMO',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			128 =>
			array (
				'codename' => 'ALK00000439',
				'name' => 'NEEDLE 25G X 1 TERUMO',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			129 =>
			array (
				'codename' => 'OBT00000179',
				'name' => 'CYGEST SUP ( 200MCG ) *',
				'stock' => '146',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			130 =>
			array (
				'codename' => 'ALK00000607',
				'name' => 'KONDOM CATETHER S MODERN/ROMSON',
				'stock' => '103',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			131 =>
			array (
				'codename' => 'BBK00000015',
				'name' => 'ACID WASH(COBAS)',
				'stock' => '6380',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			132 =>
			array (
				'codename' => 'A045',
				'name' => 'Acarbose',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			133 =>
			array (
				'codename' => 'A5922',
				'name' => 'OBAT PSIKOTROPIKA',
				'stock' => '2500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			134 =>
			array (
				'codename' => 'ALK00000425',
				'name' => 'MONOSYN 3-0 DS24',
				'stock' => '1082',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			135 =>
			array (
				'codename' => 'ALK00000432',
				'name' => 'NASOPHARYNGEAL AIRWAY 6.0 MM ID 8.8 MM OD PORTEX',
				'stock' => '1925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			136 =>
			array (
				'codename' => 'BBK00000127',
				'name' => 'TUBE CITRAT PLH 13X75-2.7 PLBL (363083) BD',
				'stock' => '2772',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			137 =>
			array (
				'codename' => 'BBK00000014',
				'name' => 'ACID BASE XP REAGENT(CENTAUR) NEW',
				'stock' => '8535',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			138 =>
			array (
				'codename' => 'A5921',
				'name' => 'OBAT NARKOTIKA',
				'stock' => '3000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			139 =>
			array (
				'codename' => 'OBT00000743',
				'name' => 'SUSU SUPPORTAN 200 ML TROPICAL FRUIT',
				'stock' => '360',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			140 =>
			array (
				'codename' => 'OBT00000366',
				'name' => 'MADOPAR DISPERSIBLE 125 TAB',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			141 =>
			array (
				'codename' => 'BBK00000012',
				'name' => 'WING SET SLBCS23X75LUER 367292',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			142 =>
			array (
				'codename' => 'OBT00000164',
				'name' => 'CORDARON 200 MG TAB',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			143 =>
			array (
				'codename' => 'BBK00000009',
				'name' => 'PATHFAST NT PRO BNP REAGEN KIT',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			144 =>
			array (
				'codename' => 'BBK00000154',
				'name' => 'ALT COBAS (20764957322)',
				'stock' => '21945',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			145 =>
			array (
				'codename' => 'B004',
				'name' => 'Ibuprofen',
				'stock' => '100000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			146 =>
			array (
				'codename' => 'OBT00000742',
				'name' => 'SUSU PEPTAMEN JUNIOR 400 GR VANILLA',
				'stock' => '2658',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			147 =>
			array (
				'codename' => 'ALK00000422',
				'name' => 'MONOCRYL 4-0 (Y496G) NEW',
				'stock' => '952',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			148 =>
			array (
				'codename' => 'ALK00000420',
				'name' => 'MICROPORE 2 X 10 YDS',
				'stock' => '362',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			149 =>
			array (
				'codename' => 'OBT00000362',
				'name' => 'LODIA 2 MG TAB',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			150 =>
			array (
				'codename' => 'OBT00000601',
				'name' => 'VOMCERAN 4 MG/ 2ML INJ',
				'stock' => '239',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			151 =>
			array (
				'codename' => 'OBT00000361',
				'name' => 'LIPITOR 40 MG TAB',
				'stock' => '194',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			152 =>
			array (
				'codename' => 'BBK00000153',
				'name' => 'AHBs2 QC KIT(CENTAUR)',
				'stock' => '69507',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			153 =>
			array (
				'codename' => 'A055',
				'name' => 'DICYNONE INJ 2 ML',
				'stock' => '500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			154 =>
			array (
				'codename' => 'ALK00000416',
				'name' => 'MERSILK 3-0 W212',
				'stock' => '764',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			155 =>
			array (
				'codename' => 'ALK00000418',
				'name' => 'MICROPORE 1 X 10 YDS 15351',
				'stock' => '184',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			156 =>
			array (
				'codename' => 'BBK00000149',
				'name' => 'VIDAS Ca 19.9',
				'stock' => '67925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			157 =>
			array (
				'codename' => 'BBK00000151',
				'name' => 'VIDAS HBsAg Ultra',
				'stock' => '37092',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			158 =>
			array (
				'codename' => 'OBT00000741',
				'name' => 'SUSU PEPTAMEN 430 GR VANILLA',
				'stock' => '3056',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			159 =>
			array (
				'codename' => 'BBK00000008',
				'name' => 'PATHFAST hsCRP REAGEN KIT',
				'stock' => '1238',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			160 =>
			array (
				'codename' => 'BBK00000006',
				'name' => 'PATHFAST cTnl REAGEN KIT',
				'stock' => '1238',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			161 =>
			array (
				'codename' => 'ALK00000040',
				'name' => 'SURFLO IV CATH 22G X 1',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			162 =>
			array (
				'codename' => 'OBT00000358',
				'name' => 'LIPANTHYL SUPRA 160 MG TAB#',
				'stock' => '195',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			163 =>
			array (
				'codename' => 'OBT00000158',
				'name' => 'COMAFUSIN HEPAR INFUS 500 CC',
				'stock' => '2310',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			164 =>
			array (
				'codename' => 'OBT00000149',
				'name' => 'CO APROVEL 150 MG/12,5 MG TAB',
				'stock' => '130',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			165 =>
			array (
				'codename' => 'BBK00000046',
				'name' => 'CHIKUNGUNYA IgM (SD)',
				'stock' => '1210',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			166 =>
			array (
				'codename' => 'OBT00000589',
				'name' => 'VENTOLIN 100 MCG/PUFF INHALER',
				'stock' => '1087',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			167 =>
			array (
				'codename' => 'BBK00000117',
				'name' => 'SYR ABG PRESET 3CC (BD 364314)',
				'stock' => '218',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			168 =>
			array (
				'codename' => 'OBT00000745',
				'name' => 'BISOLVON 4MG / 2ML INJ',
				'stock' => '757',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			169 =>
			array (
				'codename' => 'ALK00000342',
				'name' => 'HARMONIC ACE CURVED SHEARS 36 CM (HAR36)',
				'stock' => '18354',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			170 =>
			array (
				'codename' => 'OBT00000612',
				'name' => 'YASMIN TABLET ( 21 TABLET) *',
				'stock' => '1885',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			171 =>
			array (
				'codename' => 'ALK00001503',
				'name' => 'MONOSYN 5-0 DSMP13 45 CM',
				'stock' => '2041',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			172 =>
			array (
				'codename' => 'ALK00000437',
				'name' => 'NEEDLE 23G X 1 1/4 TERUMO',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			173 =>
			array (
				'codename' => 'ALK00000414',
				'name' => 'MERSILK 1 W215',
				'stock' => '887',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			174 =>
			array (
				'codename' => 'OBT00000357',
				'name' => 'LIPANTHYL PENTA 145 MG TAB',
				'stock' => '211',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			175 =>
			array (
				'codename' => 'BBK00000147',
				'name' => 'VIDAS Ca 125 II',
				'stock' => '46475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			176 =>
			array (
				'codename' => 'ALK00000369',
				'name' => 'HORIZON CLIP S-1200 NEW',
				'stock' => '213',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			177 =>
			array (
				'codename' => 'OBT00000739',
				'name' => 'SUSU PEDIASURE 400 GR COKLAT',
				'stock' => '1320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			178 =>
			array (
				'codename' => 'ALK00000413',
				'name' => 'MASKER N95-1860S/1860',
				'stock' => '239',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			179 =>
			array (
				'codename' => 'ALK00000408',
				'name' => 'LUMBAL SACRAL CORSET PRATAMA LARGE (85-95 CM)',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			180 =>
			array (
				'codename' => 'OBT00000352',
				'name' => 'LEVEMIR FLEXPEN 100 UI/ML INJ 3 ML',
				'stock' => '1877',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			181 =>
			array (
				'codename' => 'OBT00001116',
				'name' => 'SALBUTAMOL 2 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			182 =>
			array (
				'codename' => 'BBK00000145',
				'name' => 'UNSATURATED IRON-BINDING CAPACITY (COBAS 4536355190)',
				'stock' => '11157',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			183 =>
			array (
				'codename' => 'BBK00000143',
				'name' => 'SILICONIZED CUVETTE (AGGRAM) 1473',
				'stock' => '30580',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			184 =>
			array (
				'codename' => 'ALK00000406',
				'name' => 'LOMBAX DORSO-3 (M)',
				'stock' => '30250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			185 =>
			array (
				'codename' => 'ALK00000401',
				'name' => 'LEVEL 3 CLEANING INDICATOR STRIP-BLUE(810-301)',
				'stock' => '334',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			186 =>
			array (
				'codename' => 'OBT00000351',
				'name' => 'LESICHOL CAP',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			187 =>
			array (
				'codename' => 'OBT00000738',
				'name' => 'SUSU ENSURE 400 GR VANILLA',
				'stock' => '1148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			188 =>
			array (
				'codename' => 'OBT00000347',
				'name' => 'LASIX 10 MG/ML INJ 2ML',
				'stock' => '179',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			189 =>
			array (
				'codename' => 'OBT00000139',
				'name' => 'CINOLON N CREAM 10 GR',
				'stock' => '139',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			190 =>
			array (
				'codename' => 'OBT00000737',
				'name' => 'SUSU ENSURE 400 GR COKLAT',
				'stock' => '1148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			191 =>
			array (
				'codename' => 'BBK00000141',
				'name' => 'LIPASE COLORIMETRIC ASSAY (COBAS 3029590322)',
				'stock' => '14408',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			192 =>
			array (
				'codename' => 'BBK00000140',
				'name' => 'CHOLINESTERASE GEN.2 (COBAS 4498577190)',
				'stock' => '10914',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			193 =>
			array (
				'codename' => 'OBT00000736',
				'name' => 'SUSU NEPHRISOL D 231 GR VANILLA',
				'stock' => '799',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			194 =>
			array (
				'codename' => 'OBT00000605',
				'name' => 'VOSEDON 10 MG TABLET',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			195 =>
			array (
				'codename' => 'ALK00000399',
				'name' => 'LEUCOPLAST 4.5 M X 7.50 CM (1625)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			196 =>
			array (
				'codename' => 'BBK00000139',
				'name' => 'PreciControl ClinChem Multi 2 QCS (COBAS 5117291922)',
				'stock' => '1925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			197 =>
			array (
				'codename' => 'BBK00000294',
				'name' => 'KERTAS LAKMUS BIRU',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			198 =>
			array (
				'codename' => 'ALK00000357',
				'name' => 'HI-LINE XS CRANIOTOME CUTTER III (GE620R)',
				'stock' => '51964',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			199 =>
			array (
				'codename' => 'ALK00000246',
				'name' => 'ETT PLAIN 3 (100-111-030)PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			200 =>
			array (
				'codename' => 'ALK00000352',
				'name' => 'HEMOSPRAY ENDOSCOPIC HEMOSTAT 7 FR (HEMO-7)',
				'stock' => '96250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			201 =>
			array (
				'codename' => 'OBT00000345',
				'name' => 'LASAL 2 MG/5 ML SYR 100 ML',
				'stock' => '286',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			202 =>
			array (
				'codename' => 'OBT00000735',
				'name' => 'SUSU NEPHRISOL 201 GR VANILLA',
				'stock' => '696',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			203 =>
			array (
				'codename' => 'ALK00000395',
				'name' => 'KONDOM CATHETER M MODERN/ROMSON',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			204 =>
			array (
				'codename' => 'BBK00000137',
				'name' => 'XN CHECK (L1, L2, L3)',
				'stock' => '8800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			205 =>
			array (
				'codename' => 'BBK00000135',
				'name' => 'WING SET SLBCS25X75LUER.367294',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			206 =>
			array (
				'codename' => 'OBT00000734',
				'name' => 'SUSU NEPHRISOL 185 GR COKLAT',
				'stock' => '512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			207 =>
			array (
				'codename' => 'ALK00000351',
				'name' => 'HEMOLOK POLYMER CLIP XL',
				'stock' => '1864',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			208 =>
			array (
				'codename' => 'OBT00000132',
				'name' => 'CERNEVIT POWDER FOR INJ',
				'stock' => '4300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			209 =>
			array (
				'codename' => 'OBT00000733',
				'name' => 'SUSU HEPATOSOL 240 GR VANILLA',
				'stock' => '1210',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			210 =>
			array (
				'codename' => 'OBT00000342',
				'name' => 'LAPIROM 1 GR INJ',
				'stock' => '3190',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			211 =>
			array (
				'codename' => 'ALK00000391',
				'name' => 'KERTAS SONY UPC 21 L',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			212 =>
			array (
				'codename' => 'BBK00000133',
				'name' => 'UX CLEAN-C BE301124',
				'stock' => '7630',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			213 =>
			array (
				'codename' => 'BBK00000132',
				'name' => 'TUBE SST II PLH 13 X 100-5 ML (367955) BD',
				'stock' => '3553',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			214 =>
			array (
				'codename' => 'BBK00000131',
				'name' => 'TUBE PSH PLH 13 X 100-4.5 PLB (367962)',
				'stock' => '3740',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			215 =>
			array (
				'codename' => 'ALK00000345',
				'name' => 'HARMONIC HANDPIECE (HP054) NEW',
				'stock' => '7333',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			216 =>
			array (
				'codename' => 'OBT00000340',
				'name' => 'LANCID 30 MG CAP',
				'stock' => '122',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			217 =>
			array (
				'codename' => 'OBT00000732',
				'name' => 'SUSU HEPATOSOL 240 GR COKLAT',
				'stock' => '1210',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			218 =>
			array (
				'codename' => 'BBK00000129',
				'name' => 'TUBE MICRO EDTA (BD 365974)',
				'stock' => '2860',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			219 =>
			array (
				'codename' => 'ALK00000390',
				'name' => 'KERTAS CTG (M1913A/1911A)',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			220 =>
			array (
				'codename' => 'ALK00000388',
				'name' => 'KASSA NON X-RAY 6 X 6 CM 16 PLY (1222H) HOSPILAB',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			221 =>
			array (
				'codename' => 'BBK00000018',
				'name' => 'ALBUMIN (COBAS 3183688122)',
				'stock' => '5022',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			222 =>
			array (
				'codename' => 'ALK00000318',
				'name' => 'GAUNTLET RTW 15-20 MMHG /BEIGE/MEDIUM',
				'stock' => '4617',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			223 =>
			array (
				'codename' => 'OBT00000600',
				'name' => 'VOMCERAN 4 MG TAB',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			224 =>
			array (
				'codename' => 'OBT00000598',
				'name' => 'VOLTAREN 1% EMULGEL 20 GRAM',
				'stock' => '700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			225 =>
			array (
				'codename' => 'OBT00000338',
				'name' => 'KOLKATRIOL F 0.5 MCG SOFTCAP',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			226 =>
			array (
				'codename' => 'BBK00000104',
				'name' => 'SALMONELLA H AG ANTIGEN B (CB 512)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			227 =>
			array (
				'codename' => 'OBT00000331',
				'name' => 'KENACORT 4MG TAB#',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			228 =>
			array (
				'codename' => 'OBT00000330',
				'name' => 'KCL INJ 25 CC OTSUKA',
				'stock' => '91',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			229 =>
			array (
				'codename' => 'BBK00000125',
				'name' => 'TROMBIN (100NIH U/ML CS B423325)**',
				'stock' => '1913',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			230 =>
			array (
				'codename' => 'BBK00000124',
				'name' => 'TOTAL PROTEIN ( COBAS 3183734190 )',
				'stock' => '8823',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			231 =>
			array (
				'codename' => 'ALK00000779',
				'name' => 'EYE DRAPE PLAIN',
				'stock' => '768',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			232 =>
			array (
				'codename' => 'ALK00000341',
				'name' => 'HARMONIC ACE CURVED SHEARS 23 CM (HAR23)',
				'stock' => '20900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			233 =>
			array (
				'codename' => 'OBT00000113',
				'name' => 'CELESTAMIN TAB#',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			234 =>
			array (
				'codename' => 'BBK00000122',
				'name' => 'THC CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			235 =>
			array (
				'codename' => 'OBT00000329',
				'name' => 'KALXETIN 20 MG CAP',
				'stock' => '62',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			236 =>
			array (
				'codename' => 'BBK00000089',
				'name' => 'OWREN S VERONAL BUFFER B423425*',
				'stock' => '617',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			237 =>
			array (
				'codename' => 'ALK00000778',
				'name' => 'TQM BLUE (TRYPAN BLUE) 1 ML INJEKSI',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			238 =>
			array (
				'codename' => 'BBK00000053',
				'name' => 'CUVETTE(CENTAUR)*',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			239 =>
			array (
				'codename' => 'ALK00000339',
				'name' => 'HALLUX VALGUS-BUNION SPLINT',
				'stock' => '20900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			240 =>
			array (
				'codename' => 'ALK00000380',
				'name' => 'INFUS SET VL ST02 (MAKRO) FRESENIUS',
				'stock' => '412',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			241 =>
			array (
				'codename' => 'ALK00000379',
				'name' => 'INFUS SET VL PA02 (MIKRO) FRESENIUS',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			242 =>
			array (
				'codename' => 'ALK00001687',
				'name' => 'SENSI GLOVES XTRA LARGE',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			243 =>
			array (
				'codename' => 'ALK00000522',
				'name' => 'STOMACH TUBE NO.14 TERUMO',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			244 =>
			array (
				'codename' => 'OBT00000322',
				'name' => 'KAEN 1 B INFUS 500 ML',
				'stock' => '249',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			245 =>
			array (
				'codename' => 'BBK00000120',
				'name' => 'TABUNG REAKSI 12 x 75 POLYESTERINE',
				'stock' => '9080',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			246 =>
			array (
				'codename' => 'BBK00000114',
				'name' => 'SPIRITUS BAKAR 1 LITTER',
				'stock' => '289',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			247 =>
			array (
				'codename' => 'OBT00000584',
				'name' => 'VALISANBE 5 MG TAB',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			248 =>
			array (
				'codename' => 'BBK00000112',
				'name' => 'SAMPLE TIP(CENTAUR)*',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			249 =>
			array (
				'codename' => 'OBT00000321',
				'name' => 'KABIVEN PERIPHERAL INF 1440 ML',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			250 =>
			array (
				'codename' => 'ALK00000336',
				'name' => 'GUIDING CATHETER CORDIS XB 3.5 - 5 FR 100 CM (556-054-0L)',
				'stock' => '30492',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			251 =>
			array (
				'codename' => 'OBT00000315',
				'name' => 'ISOPTIN 80 MG TAB',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			252 =>
			array (
				'codename' => 'ALK00000333',
				'name' => 'GUDEL 4 INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			253 =>
			array (
				'codename' => 'BBK00000084',
				'name' => 'NAOH-D (CELL WASH COBAS 4880285190)',
				'stock' => '6770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			254 =>
			array (
				'codename' => 'OBT00000313',
				'name' => 'ISOPRINOSINE 500 MG TAB',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			255 =>
			array (
				'codename' => 'OBT00000566',
				'name' => 'TYGACIL 50 MG/ 5 ML INJ',
				'stock' => '8095',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			256 =>
			array (
				'codename' => 'OBT00000103',
				'name' => 'CEFAT 125 MG/5 ML DRY SYR 60 ML',
				'stock' => '623',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			257 =>
			array (
				'codename' => 'BBK00000105',
				'name' => 'SALMONELLA H AG ANTIGEN C (CB 513)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			258 =>
			array (
				'codename' => 'ALK00000774',
				'name' => 'DEPPER BALL LARGE (DEPPER CUCI)',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			259 =>
			array (
				'codename' => 'OBT00000308',
				'name' => 'INFUSAN NS DP 500',
				'stock' => '192',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			260 =>
			array (
				'codename' => 'ALK00000328',
				'name' => 'GUDEL 00 (5.0) BLUE INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			261 =>
			array (
				'codename' => 'ALK00000326',
				'name' => 'GUARDIAN IMAGE COVER II-0105 (HOGY)',
				'stock' => '931',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			262 =>
			array (
				'codename' => 'OBT00000304',
				'name' => 'INDEXON 0,5 MG TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			263 =>
			array (
				'codename' => 'ALK00000517',
				'name' => 'STERIL GLOVE GAMMEX PF 8',
				'stock' => '226',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			264 =>
			array (
				'codename' => 'OBT00001327',
				'name' => 'FORBETES 850 MG TABLET',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			265 =>
			array (
				'codename' => 'BBK00000069',
				'name' => 'ID-LISS/COOMBS CARD 24 X 12 ',
				'stock' => '1392',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			266 =>
			array (
				'codename' => 'OBT00000719',
				'name' => 'SELOXY AA TAB',
				'stock' => '70',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			267 =>
			array (
				'codename' => 'OBT00000578',
				'name' => 'VAKSIN CAMPAK 0,5 ML INJEKSI 5 ML',
				'stock' => '1270',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			268 =>
			array (
				'codename' => 'ALK00000773',
				'name' => 'JACKSON REES CIRCUIT 1 LITER PEDIATRIC (2123)',
				'stock' => '8059',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			269 =>
			array (
				'codename' => 'BBK00000101',
				'name' => 'PRECINORM PUC COBAS (100119201) [3121313122]',
				'stock' => '9911',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			270 =>
			array (
				'codename' => 'CGN00000048',
				'name' => 'KN-LOCKING SCREW 2.0 X 20 MM, TI (218.0102020.25)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			271 =>
			array (
				'codename' => 'OBT00001352',
				'name' => 'SANCOIDAN CAPSUL',
				'stock' => '183',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			272 =>
			array (
				'codename' => 'OBT00001179',
				'name' => 'MEXPHARM 7,5 MG CAP',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			273 =>
			array (
				'codename' => 'OBT00000301',
				'name' => 'IMBOOST FORCE CAPLET',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			274 =>
			array (
				'codename' => 'ALK00000204',
				'name' => 'EASYCARE WASH GLOVE 12 SHEET PARFUME (ECWG.12 P)',
				'stock' => '475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			275 =>
			array (
				'codename' => 'BBK00000100',
				'name' => 'PreciControl ClinChem Multi 1 QCS (COBAS 5117208922)',
				'stock' => '1540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			276 =>
			array (
				'codename' => 'BBK00000098',
				'name' => 'PHOENIX AST INDICATOR BD (246004)',
				'stock' => '2055',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			277 =>
			array (
				'codename' => 'OBT00000718',
				'name' => 'SANMOL 60 MG/0,6 ML DROP 15 ML',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			278 =>
			array (
				'codename' => 'ALK00000511',
				'name' => 'SPINOCAN NEEDLE 22 G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			279 =>
			array (
				'codename' => 'A075',
				'name' => 'Mixagrip',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			280 =>
			array (
				'codename' => 'OBT00000553',
				'name' => 'TRAJENTA DUO 2.5/850 MG TAB',
				'stock' => '94',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			281 =>
			array (
				'codename' => 'OBT00000554',
				'name' => 'TRAMAL 100 MG SUPP',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			282 =>
			array (
				'codename' => 'OBT00000994',
				'name' => 'CENDO TROPINE 1%MINIDOSE',
				'stock' => '176',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			283 =>
			array (
				'codename' => 'OBT00000992',
				'name' => 'DIBEKACIN EYE DROP 3MG/ML',
				'stock' => '759',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			284 =>
			array (
				'codename' => 'OBT00000300',
				'name' => 'ILIADIN 0,05% NASAL SPRAY 10 ML',
				'stock' => '593',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			285 =>
			array (
				'codename' => 'BBK00000094',
				'name' => 'PANEL PHOENIX PMIC/ID 14 (448531)',
				'stock' => '1608',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			286 =>
			array (
				'codename' => 'BBK00000092',
				'name' => 'PANEL PHOENIX NMIC/ID 121 BD 448721',
				'stock' => '1543',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			287 =>
			array (
				'codename' => 'ALK00000321',
				'name' => 'GIA 100 MM - 3.8 MM SINGLE USE LOADING (GIA10038L)',
				'stock' => '9900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			288 =>
			array (
				'codename' => 'OBT00000573',
				'name' => 'UROGETIX KAPLET',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			289 =>
			array (
				'codename' => 'OBT00000571',
				'name' => 'URISPAS 200 MG TAB',
				'stock' => '56',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			290 =>
			array (
				'codename' => 'BBK00000091',
				'name' => 'PANEL PHOENIX ID BROTH SP100 BD 246001',
				'stock' => '236',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			291 =>
			array (
				'codename' => 'BBK00000090',
				'name' => 'PANDY 100 ML 058-0746',
				'stock' => '990',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			292 =>
			array (
				'codename' => 'OBT00000295',
				'name' => 'HI-BONE TAB',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			293 =>
			array (
				'codename' => 'OBT00000717',
				'name' => 'SANMOL 500 MG TABLET',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			294 =>
			array (
				'codename' => 'OBT00000293',
				'name' => 'HEXYMER 2 MG TAB (100 s)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			295 =>
			array (
				'codename' => 'OBT00000550',
				'name' => 'TRADOSIK 100 MG/2 ML INJ',
				'stock' => '201',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			296 =>
			array (
				'codename' => 'ALK00000280',
				'name' => 'FILM DVE EP 28 X 35 CM (11 X 14 IN) ',
				'stock' => '412',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			297 =>
			array (
				'codename' => 'OBT00000702',
				'name' => 'DULCOLAX TAB#',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			298 =>
			array (
				'codename' => 'ALK00000538',
				'name' => 'SURFLO IV CATH 16 G X 2',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			299 =>
			array (
				'codename' => 'BBK00000064',
				'name' => 'GLUCOSE ( COBAS 20767131322 )',
				'stock' => '7686',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			300 =>
			array (
				'codename' => 'OBT00000712',
				'name' => 'POLYSILANE SYR 100 ML',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			301 =>
			array (
				'codename' => 'ALK00000315',
				'name' => 'FOLLEY CATHETER 3WAY 22 RUSH',
				'stock' => '514',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			302 =>
			array (
				'codename' => 'A5885',
				'name' => 'Obat Pegal Linu',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			303 =>
			array (
				'codename' => 'BBK00000088',
				'name' => 'OPTOCHIN DISCS (DD0001T)-(DIPA)',
				'stock' => '3839',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			304 =>
			array (
				'codename' => 'OBT00000729',
				'name' => 'SUSU ENTRAMIX 185 GR VANILA',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			305 =>
			array (
				'codename' => 'OBT00000565',
				'name' => 'TWYNSTA 80/5 MG TAB',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			306 =>
			array (
				'codename' => 'OBT00000291',
				'name' => 'HERBESSER CD 200 CAP',
				'stock' => '131',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			307 =>
			array (
				'codename' => 'ALK00000312',
				'name' => 'FOLLEY CATHETER 2WAY SILICON 18 RUSH',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			308 =>
			array (
				'codename' => 'ALK00000306',
				'name' => 'FOLLEY CATHETER 2WAY 18 RUSCH',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			309 =>
			array (
				'codename' => 'OBT00000281',
				'name' => 'GLURENORM 30 MG TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			310 =>
			array (
				'codename' => 'ALK00000302',
				'name' => 'FOLLEY CATHETER 2WAY 10 RUSCH',
				'stock' => '385',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			311 =>
			array (
				'codename' => 'BBK00000034',
				'name' => 'BARIUM CHLORIDA10% B/100ML',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			312 =>
			array (
				'codename' => 'BBK00000087',
				'name' => 'OPTIUM KETONE (99113.7)',
				'stock' => '399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			313 =>
			array (
				'codename' => 'BBK00000083',
				'name' => 'NAOH-D ( COBAS 4489241190 )',
				'stock' => '2618',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			314 =>
			array (
				'codename' => 'OBT00000700',
				'name' => 'ASTHIN FORCE 4 MG CAP',
				'stock' => '73',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			315 =>
			array (
				'codename' => 'OBT00000694',
				'name' => 'RIFAMPICIN 450 MG CAP',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			316 =>
			array (
				'codename' => 'OBT00000990',
				'name' => 'CENDO NATACEN 5% MINIDOSE',
				'stock' => '458',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			317 =>
			array (
				'codename' => 'ALK00000301',
				'name' => 'FOLLEY CATHETER 2 WAY SILICON 8 FR PED REMIDI',
				'stock' => '286',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			318 =>
			array (
				'codename' => 'BBK00000062',
				'name' => 'FOB (FECAL OCCULT BLOOD) (FOKUS)',
				'stock' => '791',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			319 =>
			array (
				'codename' => 'OBT00000537',
				'name' => 'TEGRETOL CR 200 MG TAB',
				'stock' => '48',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			320 =>
			array (
				'codename' => 'OBT00000728',
				'name' => 'SUSU ENTRAMIX 185 GR COKLAT',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			321 =>
			array (
				'codename' => 'OBT00000278',
				'name' => 'GLUCOPHAGE XR 750 MG TAB.',
				'stock' => '24',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			322 =>
			array (
				'codename' => 'OBT00000085',
				'name' => 'BRILINTA FC 90 MG TAB#',
				'stock' => '168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			323 =>
			array (
				'codename' => 'BBK00000030',
				'name' => 'AS SULFASALICILAT 20% 100 ML',
				'stock' => '4675',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			324 =>
			array (
				'codename' => 'OBT00000727',
				'name' => 'SUSU DIABETASOL 180 GR VANILLA',
				'stock' => '374',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			325 =>
			array (
				'codename' => 'OBT00000277',
				'name' => 'GLUCOPHAGE XR 500 MG TAB',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			326 =>
			array (
				'codename' => 'ALK00000298',
				'name' => 'FOLEY CATHETER SILICONE 2 WAY 24 FR FORTUNE',
				'stock' => '1072',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			327 =>
			array (
				'codename' => 'ALK00000294',
				'name' => 'FM CREPE 6 IN (15 CM X 4,55 M)',
				'stock' => '812',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			328 =>
			array (
				'codename' => 'OBT00000082',
				'name' => 'BRAINACT 500 MG TAB',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			329 =>
			array (
				'codename' => 'ALK00000265',
				'name' => 'EYE PACK (ALCON P20EPBNW)',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			330 =>
			array (
				'codename' => 'OBT00000536',
				'name' => 'TEGRETOL 200 MG TAB',
				'stock' => '39',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			331 =>
			array (
				'codename' => 'OBT00000276',
				'name' => 'GLUCOPHAGE XR 1000 MG TAB ',
				'stock' => '41',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			332 =>
			array (
				'codename' => 'ALK00000771',
				'name' => 'SPECIMEN CARRIER BAG',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			333 =>
			array (
				'codename' => 'ALK00000193',
				'name' => 'DOCARE PRE-OPS',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			334 =>
			array (
				'codename' => 'OBT00000534',
				'name' => 'TEBOKAN FORTE 120 MG TAB',
				'stock' => '171',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			335 =>
			array (
				'codename' => 'OBT00000684',
				'name' => 'METRONIDAZOLE IV 500 MG INF 100ML',
				'stock' => '362',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			336 =>
			array (
				'codename' => 'MKTI00001',
				'name' => 'Obat Anggoro',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			337 =>
			array (
				'codename' => 'BBK00000040',
				'name' => 'C.f.a.s Lipids (COBAS 12172623122)',
				'stock' => '2559',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			338 =>
			array (
				'codename' => 'OBT00000546',
				'name' => 'THYROZOL 5 MG TAB',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			339 =>
			array (
				'codename' => 'ALK00000770',
				'name' => 'CRISTO SEAL WAX',
				'stock' => '715',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			340 =>
			array (
				'codename' => 'BBK00000059',
				'name' => 'ECOTERGENT COBAS C311 (5422485190)',
				'stock' => '4796',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			341 =>
			array (
				'codename' => 'OBT00000693',
				'name' => 'PYRAZINAMIDE 500 MG TABLET',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			342 =>
			array (
				'codename' => 'ALK00000293',
				'name' => 'FM CREPE 4 IN (10 CM X 4,55 M)',
				'stock' => '643',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			343 =>
			array (
				'codename' => 'ALK00000291',
				'name' => 'FLOWTRON-CALF GARMENT L501-M/E*',
				'stock' => '9900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			344 =>
			array (
				'codename' => 'OBT-N-0002',
				'name' => 'B FOR BALL',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			345 =>
			array (
				'codename' => 'ALK00000769',
				'name' => 'THERMAL PAPER 57MM X 30M (THERMAROL)',
				'stock' => '385',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			346 =>
			array (
				'codename' => 'OBT00000538',
				'name' => 'TELFAST OD 120 MG TABLET',
				'stock' => '83',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			347 =>
			array (
				'codename' => 'OBT00000270',
				'name' => 'ASCARDIA 80 MG ENTERIC-COATED TAB',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			348 =>
			array (
				'codename' => 'OBT00000074',
				'name' => 'BLOPRESS 16 MG TAB',
				'stock' => '161',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			349 =>
			array (
				'codename' => 'ALK00000286',
				'name' => 'FLAT ROLL R41 (10CMX200M)',
				'stock' => '6832',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			350 =>
			array (
				'codename' => 'ALK00000283',
				'name' => 'FINGER SPLINT DARE',
				'stock' => '12000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			351 =>
			array (
				'codename' => 'OBT00000269',
				'name' => 'GALVUS 50 MG TAB',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			352 =>
			array (
				'codename' => 'OBT00000726',
				'name' => 'SUSU DIABETASOL 180 GR COKLAT',
				'stock' => '361',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			353 =>
			array (
				'codename' => 'OBT00000067',
				'name' => 'BFLUID INFUS 500 ML   ',
				'stock' => '1815',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			354 =>
			array (
				'codename' => 'OBT00000066',
				'name' => 'BFLUID INFUS 1000 ML',
				'stock' => '3094',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			355 =>
			array (
				'codename' => 'OBT00000682',
				'name' => 'LORATADIN 10 MG TAB ',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			356 =>
			array (
				'codename' => 'OBT00000680',
				'name' => 'ISOSORBID DINITRAT 5 MG GEN',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			357 =>
			array (
				'codename' => 'OBT00000528',
				'name' => 'SYMBICORT 160/4.5Mcg 60 DOSIS TURBUHALER#',
				'stock' => '3058',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			358 =>
			array (
				'codename' => 'BBK00000082',
				'name' => 'MULTICLEAN (COBAS 4708725190)',
				'stock' => '610',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			359 =>
			array (
				'codename' => 'BBK00000081',
				'name' => 'MRSA AGAR MODIFIED CHROMOGENIC (PPM-1486)',
				'stock' => '634',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			360 =>
			array (
				'codename' => 'BBK00000077',
				'name' => 'MEDITAPE CHECK 2 (10ML) AF797144',
				'stock' => '1057',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			361 =>
			array (
				'codename' => 'OBT00000266',
				'name' => 'FRESOFOL 1%  MCT/LCT INJ 20 ML',
				'stock' => '792',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			362 =>
			array (
				'codename' => 'ALK00000278',
				'name' => 'F-HEMOSOL PART A/HD SOLUTION PART A',
				'stock' => '924',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			363 =>
			array (
				'codename' => 'ALK00000276',
				'name' => 'FEEDING TUBE FR-8 100CM TERUMO',
				'stock' => '424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			364 =>
			array (
				'codename' => 'OBT00000679',
				'name' => 'INH 300 MG TAB (100 s)',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			365 =>
			array (
				'codename' => 'OBT00000261',
				'name' => 'FORMYCO 200 MG TAB',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			366 =>
			array (
				'codename' => 'OBT00000987',
				'name' => 'FORUMEN 5MG/ML EAR DROP',
				'stock' => '260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			367 =>
			array (
				'codename' => 'OBT00000725',
				'name' => 'ZEMYC 2 MG/ ML INF 100 ML',
				'stock' => '2266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			368 =>
			array (
				'codename' => 'OBT00000531',
				'name' => 'TAXEGRAM 0,5 GR INJ',
				'stock' => '781',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			369 =>
			array (
				'codename' => 'OBT00000171',
				'name' => 'CRAVIT 250 MG TAB',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			370 =>
			array (
				'codename' => 'ALK00001494',
				'name' => 'SILKAM 0 13 X60 (B0263877)',
				'stock' => '825',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			371 =>
			array (
				'codename' => 'BBK00000074',
				'name' => 'LUGOL IODINE SOLUTION 100 ML',
				'stock' => '880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			372 =>
			array (
				'codename' => 'OBT00000674',
				'name' => 'FOLIC ACID 1 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			373 =>
			array (
				'codename' => 'BBK00000262',
				'name' => 'POT OBAT 30 CC',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			374 =>
			array (
				'codename' => 'OBT00000669',
				'name' => 'EPHEDRINE HCL 50 MG/ML INJ',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			375 =>
			array (
				'codename' => 'OBT00000517',
				'name' => 'SMOFLIPID 20% 100 ML',
				'stock' => '1760',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			376 =>
			array (
				'codename' => 'OBT00000251',
				'name' => 'FLAGYSTATIN VAGINAL SUPPOSITORIA',
				'stock' => '189',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			377 =>
			array (
				'codename' => 'BBK00000073',
				'name' => 'LITMUS PAPER RED (LAKMUS MERAH)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			378 =>
			array (
				'codename' => 'BBK00000071',
				'name' => 'I-STAT ACT KAOLIN (NEW)',
				'stock' => '1859',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			379 =>
			array (
				'codename' => 'ALK00000272',
				'name' => 'FEEDING TUBE FR.10 120CM JMS',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			380 =>
			array (
				'codename' => 'OBT00000515',
				'name' => 'SISTENOL CAPLET',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			381 =>
			array (
				'codename' => 'OBT00000986',
				'name' => 'GLAUCON 250 MG TAB',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			382 =>
			array (
				'codename' => 'ALK00000268',
				'name' => 'FACE MASK NO. 4',
				'stock' => '1155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			383 =>
			array (
				'codename' => 'OBT00000057',
				'name' => 'BAQUINOR 200 MG/100 ML INFUSION 100 ML',
				'stock' => '2366',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			384 =>
			array (
				'codename' => 'BBK00000260',
				'name' => 'POT OBAT 100 CC',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			385 =>
			array (
				'codename' => 'BBK00000070',
				'name' => 'IMMERSION OIL 100 ML (MERCK)',
				'stock' => '7500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			386 =>
			array (
				'codename' => 'ALK00000452',
				'name' => 'OPTIFLOW NASAL CANNULA INTERFACE ADULT MEDIUM (OPT844)',
				'stock' => '5544',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			387 =>
			array (
				'codename' => 'ALK00001654',
				'name' => 'ETT NKK NO. 4,5  WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			388 =>
			array (
				'codename' => 'OBT00000984',
				'name' => 'CENDO CYCLON 1% TETES MATA',
				'stock' => '195',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			389 =>
			array (
				'codename' => 'OBT00000668',
				'name' => 'DOXYCYCLIN 100 MG CAP',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			390 =>
			array (
				'codename' => 'OBT00000509',
				'name' => 'SEVOFLURANE BAXTER 250 ML',
				'stock' => '119',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			391 =>
			array (
				'codename' => 'BBK00000067',
				'name' => 'HITERGENT COBAS',
				'stock' => '2054',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			392 =>
			array (
				'codename' => 'BBK00000065',
				'name' => 'HBSAG CASSETE (FOKUS)',
				'stock' => '338',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			393 =>
			array (
				'codename' => 'ALK00000171',
				'name' => 'DIALYZER FRESENIUS F8HPS',
				'stock' => '1952',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			394 =>
			array (
				'codename' => 'A058',
				'name' => 'XANAX TAB 1 MG',
				'stock' => '74',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			395 =>
			array (
				'codename' => 'A2938',
				'name' => 'LEUCOVORIN TABLET',
				'stock' => '48',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			396 =>
			array (
				'codename' => 'OBT00001273',
				'name' => 'FARLEV 750 MG TAB',
				'stock' => '407',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			397 =>
			array (
				'codename' => 'OBT00000053',
				'name' => 'AVIL 25 MG TAB',
				'stock' => '17',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			398 =>
			array (
				'codename' => 'ALK00000254',
				'name' => 'ETT PROF CLEAR 6 (100-199-060)',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			399 =>
			array (
				'codename' => 'OBT00000502',
				'name' => 'SANPRIMA FORTE (800 MG,160 MG) CAPLET',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			400 =>
			array (
				'codename' => 'OBT00000523',
				'name' => 'STESOLID 10 MG/2,5 ML RECTAL TUBE#',
				'stock' => '382',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			401 =>
			array (
				'codename' => 'ALK00000447',
				'name' => 'NUTRILINE TWINFLO 2 FR + STYLET + MICROFLASH (1252.230)',
				'stock' => '17050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			402 =>
			array (
				'codename' => 'OBT00000249',
				'name' => 'FLAGYL IV 500 MG INF 100 ML',
				'stock' => '956',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			403 =>
			array (
				'codename' => 'BBK00000063',
				'name' => 'FORMALIN  LIQUID 37 % 10 L',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			404 =>
			array (
				'codename' => 'BBK00000060',
				'name' => 'ECSTACY (MDMA)-(O1K-20430)',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			405 =>
			array (
				'codename' => 'OBT00000248',
				'name' => 'FLAGYL 500 MG TAB',
				'stock' => '73',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			406 =>
			array (
				'codename' => 'OBT00001265',
				'name' => 'FORXIGA 5 MG TAB',
				'stock' => '155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			407 =>
			array (
				'codename' => 'OBT00000047',
				'name' => 'ASTHIN B-OND SOFT CAP',
				'stock' => '101',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			408 =>
			array (
				'codename' => 'BBK00000172',
				'name' => 'CRATININE ( COBAS 3263991190 )',
				'stock' => '107',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			409 =>
			array (
				'codename' => 'OBT00000052',
				'name' => 'AVELOX 400 MG/250 ML INF',
				'stock' => '5599',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			410 =>
			array (
				'codename' => 'BBK00000057',
				'name' => 'DENGUE ANTIGEN CASETTE (FOKUS)',
				'stock' => '1485',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			411 =>
			array (
				'codename' => 'BBK00000054',
				'name' => 'DADE INNOVIN (CS 2100)-(B4212240)',
				'stock' => '1049',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			412 =>
			array (
				'codename' => 'BBK00000038',
				'name' => 'BLUE TIP EPPENDORF TYPE VOL. 1000 ML (36011000B)',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			413 =>
			array (
				'codename' => 'BBK00000037',
				'name' => 'BIL DIREK (COBAS 20737496322)',
				'stock' => '6352',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			414 =>
			array (
				'codename' => 'OBT00000665',
				'name' => 'COTRIMOXAZOL 480 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			415 =>
			array (
				'codename' => 'ALK00000606',
				'name' => 'TERRALIN PROTECT 500ml (RTD) A20030',
				'stock' => '1275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			416 =>
			array (
				'codename' => 'OBT00000245',
				'name' => 'FENTANYL 50 MCG/ml INJ 2 ML',
				'stock' => '484',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			417 =>
			array (
				'codename' => 'OBT00000664',
				'name' => 'CLOPIDOGREL 75 MG TAB *',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			418 =>
			array (
				'codename' => 'BBK00000033',
				'name' => 'BACTEC PEDS PLUS/F 50/PK F/G BD 442194',
				'stock' => '595',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			419 =>
			array (
				'codename' => 'OBT00001199',
				'name' => 'VESTEIN DRY SYRUP 60ML',
				'stock' => '358',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			420 =>
			array (
				'codename' => 'OBT00000660',
				'name' => 'CEFAZOLIN 1 GR INJ',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			421 =>
			array (
				'codename' => 'OBT00000487',
				'name' => 'RINGER DEXTROSE 500 ML OTSUKA',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			422 =>
			array (
				'codename' => 'BBK00000061',
				'name' => 'EDTA 10 % - 500 ML',
				'stock' => '6285',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			423 =>
			array (
				'codename' => 'OBT00000483',
				'name' => 'RHINOFED SYRUP 60 ML',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			424 =>
			array (
				'codename' => 'ALK00000229',
				'name' => 'ETHIBON 2-0 W10B52',
				'stock' => '3619',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			425 =>
			array (
				'codename' => 'ALK00000145',
				'name' => 'C-SECTION IOBAN (TM6657)',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			426 =>
			array (
				'codename' => 'OBT00000244',
				'name' => 'FENDEX 25 MG TAB',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			427 =>
			array (
				'codename' => 'OBT00000519',
				'name' => 'STABACTAM 1 GR INJ',
				'stock' => '1925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			428 =>
			array (
				'codename' => 'ALK00001491',
				'name' => 'SURGICAL GOWN XL SM-15K (HOGY)',
				'stock' => '1028',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			429 =>
			array (
				'codename' => 'ALK00000238',
				'name' => 'ETT NKK 5.5 PORTEX (100-110-055)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			430 =>
			array (
				'codename' => 'OBT00000479',
				'name' => 'RANIVEL SYRUP 60 ML',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			431 =>
			array (
				'codename' => 'OBT00000476',
				'name' => 'PUMPITOR 20 MG CAP',
				'stock' => '135',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			432 =>
			array (
				'codename' => 'ALK00000236',
				'name' => 'ETHILOOP* SILICONE SLING (EH383E)',
				'stock' => '1830',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			433 =>
			array (
				'codename' => 'OBT00000983',
				'name' => 'CENDO P-PRED EYE DROP#',
				'stock' => '610',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			434 =>
			array (
				'codename' => 'OBT00000240',
				'name' => 'FARPRESIN 20 UNIT/ML INJ',
				'stock' => '880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			435 =>
			array (
				'codename' => 'ALK00000221',
				'name' => 'ENDOPATH EXCEL BLADELESS TROCAR 5 MM- 150 MM (B5XT)',
				'stock' => '22440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			436 =>
			array (
				'codename' => 'OBT00000473',
				'name' => 'PULMICORT 0.5 MG/2 ML RESP 2 ML (0,25MG/ML)',
				'stock' => '185',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			437 =>
			array (
				'codename' => 'BBK00000058',
				'name' => 'DENGUE IgG/IgM CASETTE (FOKUS)',
				'stock' => '1300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			438 =>
			array (
				'codename' => 'OBT00000658',
				'name' => 'CAPTOPRIL 25 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			439 =>
			array (
				'codename' => 'ALK00000218',
				'name' => 'ENDOBRONCHIAL TUBE STR 37FR LEFT (198-37L)',
				'stock' => '31900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			440 =>
			array (
				'codename' => 'OBT00000982',
				'name' => 'CENDO GLAOPLUS MINIDOSE',
				'stock' => '1055',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			441 =>
			array (
				'codename' => 'ALK00000136',
				'name' => 'CONTAINER URINE TUTUP PUTIH (25183)',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			442 =>
			array (
				'codename' => 'ALK00000968',
				'name' => 'KAPAS BIASA 100GR DRC/ HUSADA',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			443 =>
			array (
				'codename' => 'ALK00000423',
				'name' => 'MONOPLUS 0 HR 48 (0024090)',
				'stock' => '2644',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			444 =>
			array (
				'codename' => 'OBT00000513',
				'name' => 'SIMARC-2 2 MG TABLET',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			445 =>
			array (
				'codename' => 'OBT-N-0001',
				'name' => 'A FOR APPLE',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			446 =>
			array (
				'codename' => 'OBT00001315',
				'name' => 'NOVEXIB 200 MG KAPSUL',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			447 =>
			array (
				'codename' => 'ALK00000101',
				'name' => 'IN STOPPER LUER LOCK B BRAUN',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			448 =>
			array (
				'codename' => 'OBT00000657',
				'name' => 'CALCIUM GLUCONAS 10% INJ',
				'stock' => '188',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			449 =>
			array (
				'codename' => 'OBT00000467',
				'name' => 'PROPOFOL-LIPURO 20 ML INJ',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			450 =>
			array (
				'codename' => 'ALK00000407',
				'name' => 'LOMBAX DORSO-4 (L)',
				'stock' => '30250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			451 =>
			array (
				'codename' => 'ALK00000232',
				'name' => 'ETHIBON EXCEL 2-0 W6977',
				'stock' => '1653',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			452 =>
			array (
				'codename' => 'ALK00000227',
				'name' => 'ERCP CATHETER (4522-18 FD) NEW',
				'stock' => '24090',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			453 =>
			array (
				'codename' => 'ALK00001495',
				'name' => 'VICRYL 0 TAPER (J346H)',
				'stock' => '1475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			454 =>
			array (
				'codename' => 'ALK00001195',
				'name' => 'URETER CATH SELEC-TIP NO.5 BARD BENGKOK',
				'stock' => '9625',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			455 =>
			array (
				'codename' => 'ALK00001035',
				'name' => 'NASAL PRONG/ DOUBLE TUBE NASAL VENTILATION 10 FR (2596.2)',
				'stock' => '2970',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			456 =>
			array (
				'codename' => 'ALK00000997',
				'name' => 'LUMBAR SACRO SUPP LARGE (2065-L)',
				'stock' => '6660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			457 =>
			array (
				'codename' => 'ALK00001225',
				'name' => 'VICRYL RAPIDE 2-0 ( W 9962 T)',
				'stock' => '906',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			458 =>
			array (
				'codename' => 'OBT00000981',
				'name' => 'CENDO PROTAGENTA (MINI DOSE)',
				'stock' => '365',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			459 =>
			array (
				'codename' => 'OBT00000044',
				'name' => 'ASERING INFUSION 500 ML',
				'stock' => '279',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			460 =>
			array (
				'codename' => 'ALK00000353',
				'name' => 'HERCULES 3-STAGE WIRE BALON 10-11-12 MM (HBD-W-10-11-12) NEW',
				'stock' => '70730',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			461 =>
			array (
				'codename' => 'ALK00001179',
				'name' => 'TONGKAT KETIAK SHIMA ALUMUNIUM SMALL (SM- 8061-S)',
				'stock' => '2420',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			462 =>
			array (
				'codename' => 'ALK00000212',
				'name' => 'ELASTIC COMPRESSION ANKLE SUPPORT SIZE. SMALL (ES-929-S)',
				'stock' => '1925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			463 =>
			array (
				'codename' => 'OBT00000980',
				'name' => 'ESTER C (STRIP/4 TABLET)',
				'stock' => '56',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			464 =>
			array (
				'codename' => 'ALK00000402',
				'name' => 'LMA SUPREME SIZE 1.5 (175015)',
				'stock' => '4704',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			465 =>
			array (
				'codename' => 'OBT00000460',
				'name' => 'PRIMPERAN 10MG TABLET',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			466 =>
			array (
				'codename' => 'OBT00000239',
				'name' => 'FARGOXIN TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			467 =>
			array (
				'codename' => 'OBT00000508',
				'name' => 'SEROQUEL 25MG TAB',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			468 =>
			array (
				'codename' => 'OBT00000507',
				'name' => 'SERETIDE DISKUS 250 DOSE INHALER#',
				'stock' => '2399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			469 =>
			array (
				'codename' => 'ALK00001228',
				'name' => 'V-LOC 180 DEVICE 3-0 P-12  30 CM (VLOCL0614)',
				'stock' => '9251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			470 =>
			array (
				'codename' => 'ALK00000197',
				'name' => 'DUODERM CGF 4 X 4',
				'stock' => '1257',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			471 =>
			array (
				'codename' => 'ALK00000397',
				'name' => 'LAMINARIA L',
				'stock' => '1925',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			472 =>
			array (
				'codename' => 'OBT00000453',
				'name' => 'PLETAAL 50 MG TAB',
				'stock' => '79',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			473 =>
			array (
				'codename' => 'OBT00000979',
				'name' => 'BECOM-C FC CAPLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			474 =>
			array (
				'codename' => 'ALK00000373',
				'name' => 'HYPAVIX 10CM X 5M',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			475 =>
			array (
				'codename' => 'OBT00000446',
				'name' => 'PARIET 10 MG TAB',
				'stock' => '176',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			476 =>
			array (
				'codename' => 'ALK00000225',
				'name' => 'EPIDURAL PERIFIX B/BRAUN 18G',
				'stock' => '3960',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			477 =>
			array (
				'codename' => 'A061',
				'name' => 'Obat Test Chrome 49',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			478 =>
			array (
				'codename' => 'ALK00001218',
				'name' => 'VICRYL 8-0 W9560',
				'stock' => '2505',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			479 =>
			array (
				'codename' => 'BBK00000052',
				'name' => 'CONTROL PLASMA N(CS ORKE41)',
				'stock' => '2059',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			480 =>
			array (
				'codename' => 'OBT00000656',
				'name' => 'AZITHROMYCIN 500 MG TAB',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			481 =>
			array (
				'codename' => 'OBT00000441',
				'name' => 'OSSOPAN 800 MG TAB',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			482 =>
			array (
				'codename' => 'ALK00000128',
				'name' => 'COLONOSCOPY PANT (MEDITECH)',
				'stock' => '484',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			483 =>
			array (
				'codename' => 'OBT00000654',
				'name' => 'AMLODIPIN 5 MG TAB ',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			484 =>
			array (
				'codename' => 'BBK00000051',
				'name' => 'CONTROL - TEST M',
				'stock' => '3256',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			485 =>
			array (
				'codename' => 'OBT00000437',
				'name' => 'NORVASK 5 MG TAB',
				'stock' => '84',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			486 =>
			array (
				'codename' => 'ALK00001555',
				'name' => 'IOBAN 6651 3M',
				'stock' => '53317',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			487 =>
			array (
				'codename' => 'ALK00000387',
				'name' => 'KASA STERIL 16 X 16',
				'stock' => '225',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			488 =>
			array (
				'codename' => 'ALK00000223',
				'name' => 'ENSEAL G2 ARTICULATING CURVED SEALER 35 CM (NSLG2C35A)',
				'stock' => '22506',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			489 =>
			array (
				'codename' => 'ALK00000220',
				'name' => 'ENDOLOOP PDS II LIGATURE 0.46CM (18) EZ10G',
				'stock' => '8712',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			490 =>
			array (
				'codename' => 'ALK00000216',
				'name' => 'EMG Concentric Needle Electrode 38mm - Green (38 x 0.45)',
				'stock' => '1672',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			491 =>
			array (
				'codename' => 'OBT00000499',
				'name' => 'SANEXON 4 MG TAB',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			492 =>
			array (
				'codename' => 'OBT00000231',
				'name' => 'EXFORGE 10 MG/160 MG TAB#',
				'stock' => '174',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			493 =>
			array (
				'codename' => 'ALK00000214',
				'name' => 'ELASTOMULL 10 CM X 4 M',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			494 =>
			array (
				'codename' => 'OBT00000224',
				'name' => 'EPISAN 500 MG/5 ML SUSP 200 ML',
				'stock' => '589',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			495 =>
			array (
				'codename' => 'ALK00000385',
				'name' => 'KASA LIPAT NON X-RAY 10X10CM 16 PLY (1610) HOSPILAB',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			496 =>
			array (
				'codename' => 'OBT00000425',
				'name' => 'NEO-K 2MG/ML INJ',
				'stock' => '136',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			497 =>
			array (
				'codename' => 'OBT00001213',
				'name' => 'MYCOSTATIN SUSPENSI 12 ML',
				'stock' => '566',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			498 =>
			array (
				'codename' => 'BBK00000050',
				'name' => 'CONICALTESTTUBEWITH SCREW17018',
				'stock' => '4675',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			499 =>
			array (
				'codename' => 'A5867',
				'name' => 'TRAMADOL 100 MG TAB',
				'stock' => '1250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			500 =>
			array (
				'codename' => 'BBK00000049',
				'name' => 'COMBUR 10M/100 (1379208)',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			501 =>
			array (
				'codename' => 'ALK00000125',
				'name' => 'COLLAR PHILADELPIA L',
				'stock' => '6600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			502 =>
			array (
				'codename' => 'OBT00001151',
				'name' => 'ZOFREDAL 2 MG TAB',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			503 =>
			array (
				'codename' => 'OBT00000038',
				'name' => 'AQUA PRO INJ 1 LITER OTSUKA',
				'stock' => '276',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			504 =>
			array (
				'codename' => 'OBT00000977',
				'name' => 'ASCARDIA 160 MG ENTERIC-COATED TAB#',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			505 =>
			array (
				'codename' => 'OBT00000492',
				'name' => 'SAGESTAM 40 MG/ML INJEKSI 2 ML',
				'stock' => '73',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			506 =>
			array (
				'codename' => 'BBK00000047',
				'name' => 'CLEANING SOLUTION (CENTAUR)',
				'stock' => '4089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			507 =>
			array (
				'codename' => 'ALK00000378',
				'name' => 'INFUS SET MAKRO TERUMO (TI*U200L07)',
				'stock' => '147',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			508 =>
			array (
				'codename' => 'ALK00000600',
				'name' => 'SPINOCAN NEEDLE 26G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			509 =>
			array (
				'codename' => 'OBT00000491',
				'name' => 'SAGESTAM 0,1% CREAM 10 GR',
				'stock' => '176',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			510 =>
			array (
				'codename' => 'ALK00000366',
				'name' => 'HORIZON CLIP LG- 4200 ',
				'stock' => '473',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			511 =>
			array (
				'codename' => 'ALK00000189',
				'name' => 'DISPOSABLE ELEKTRODA PHILIP MONITOR 40493E#',
				'stock' => '72',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			512 =>
			array (
				'codename' => 'OBT00000646',
				'name' => 'VAKSIN VAXIGRIP INJ 0,5 ML#',
				'stock' => '1468',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			513 =>
			array (
				'codename' => 'OBT00000489',
				'name' => 'RINGER LAKTAT 500 ML OTSUKA',
				'stock' => '161',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			514 =>
			array (
				'codename' => 'OBT00000976',
				'name' => 'ZEGAVIT CAPLET',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			515 =>
			array (
				'codename' => 'ALK00000187',
				'name' => 'DISP SYRINGE 50CC TERUMO',
				'stock' => '212',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			516 =>
			array (
				'codename' => 'OBT00000720',
				'name' => 'STERIMAR NASAL HYGIENE',
				'stock' => '1198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			517 =>
			array (
				'codename' => 'OBT00000217',
				'name' => 'DUROGESIC 25 MCG/H#',
				'stock' => '2370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			518 =>
			array (
				'codename' => 'OBT00000709',
				'name' => 'NEUROBION FORTE 5000 TAB',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			519 =>
			array (
				'codename' => 'OBT00000488',
				'name' => 'RINGER FUNDIN 500 ML',
				'stock' => '169',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			520 =>
			array (
				'codename' => 'ALK00000179',
				'name' => 'DISP ECG MONITORING ELEKTRODE NEONATAL /PAED PHILIPS 13952D#',
				'stock' => '367',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			521 =>
			array (
				'codename' => 'OBT00000406',
				'name' => 'MYCORINE 2% POWDER 25 GRAM',
				'stock' => '434',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			522 =>
			array (
				'codename' => 'OBT00000215',
				'name' => 'DRAMAMINE TAB',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			523 =>
			array (
				'codename' => 'OBT00000975',
				'name' => 'CARBO GLYCERINE 10 30 ML',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			524 =>
			array (
				'codename' => 'OBT00000708',
				'name' => 'NEUROBION TAB',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			525 =>
			array (
				'codename' => 'ALK00000207',
				'name' => 'ECG PAPER PHILIPS M2483A/210 X 300 ',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			526 =>
			array (
				'codename' => 'ALK00000206',
				'name' => 'ECG PAPER PHILIPS 40457D',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			527 =>
			array (
				'codename' => 'OBT00000402',
				'name' => 'MUCOSTA 100 MG TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			528 =>
			array (
				'codename' => 'ALK00000205',
				'name' => 'EASYFOAM 100 X 600 X 5 MM',
				'stock' => '3630',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			529 =>
			array (
				'codename' => 'OBT00000644',
				'name' => 'VAKSIN VARILRIX 0,5 ML INJ',
				'stock' => '3919',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			530 =>
			array (
				'codename' => 'ALK00000203',
				'name' => 'EASY LOCK 1,5ML NETRAL COLOUR (23053)',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			531 =>
			array (
				'codename' => 'OBT00000399',
				'name' => 'MUCOPECT ADULT ELIXIR 60 ML#',
				'stock' => '646',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			532 =>
			array (
				'codename' => 'OBT00000397',
				'name' => 'MST CONTINUS 10 MG TAB',
				'stock' => '156',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			533 =>
			array (
				'codename' => 'ALK00000598',
				'name' => 'LMA SUPREME SIZE 5',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			534 =>
			array (
				'codename' => 'OBT00000699',
				'name' => 'APIALYS DROP 10 ML',
				'stock' => '362',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			535 =>
			array (
				'codename' => 'BBK00000044',
				'name' => 'CALCIUM TOTAL COBAS (5061482190)',
				'stock' => '8928',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			536 =>
			array (
				'codename' => 'ALK00000358',
				'name' => 'HI-LINE XS DIAMOND BURR II D6,0MM (GE519R) NEW',
				'stock' => '47355',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			537 =>
			array (
				'codename' => 'ALK00000196',
				'name' => 'DOUBLE UMBILICAL CATHETER 4 FR- 20 CM (1272.14)',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			538 =>
			array (
				'codename' => 'OBT00000642',
				'name' => 'VAKSIN SYNFLORIX PFS INJ',
				'stock' => '4941',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			539 =>
			array (
				'codename' => 'ALK00000356',
				'name' => 'HI-LINE XS CRANIOTOME CUTTER II (GE520R)',
				'stock' => '51964',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			540 =>
			array (
				'codename' => 'ALK00000594',
				'name' => 'CERTOFIX TRIO PAED S 513 B BRAUN(4167244)',
				'stock' => '9350',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			541 =>
			array (
				'codename' => 'ALK00000195',
				'name' => 'DOUBLE LUMEN UMBILICAL CATHETER NO. 5 FR  40 CM (1274.17)',
				'stock' => '5225',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			542 =>
			array (
				'codename' => 'BBK00000043',
				'name' => 'CALCIUM CHLORIDE (0.025 mol/l CS 0RHO37)*',
				'stock' => '1270',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			543 =>
			array (
				'codename' => 'OBT00000482',
				'name' => 'RENXAMIN ',
				'stock' => '1062',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			544 =>
			array (
				'codename' => 'ALK00000194',
				'name' => 'DOUBLE J STENT FR 4,7 + GUIDE WIRE CHOCK(EN-360522-30-BS)',
				'stock' => '23289',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			545 =>
			array (
				'codename' => 'BBK00000042',
				'name' => 'CA CLEAN II (BT565104)-(CS-2100)',
				'stock' => '8833',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			546 =>
			array (
				'codename' => 'ALK00000114',
				'name' => 'CERTOFIX PROTECT TRIO V 720 (4163214P)',
				'stock' => '12650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			547 =>
			array (
				'codename' => 'ALK00000113',
				'name' => 'CERTOFIX MONO PAED + ACCES PAED (4160177)',
				'stock' => '7975',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			548 =>
			array (
				'codename' => 'OBT00000026',
				'name' => 'AMOXSAN 125 MG/5 ML DRY SYRUP 60 ML',
				'stock' => '241',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			549 =>
			array (
				'codename' => 'OBT00001040',
				'name' => 'ALEGYSAL EYE DROP',
				'stock' => '935',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			550 =>
			array (
				'codename' => 'ALK00000768',
				'name' => 'DIAPER MAMY POKO NEWBORN (ISI 14)',
				'stock' => '29',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			551 =>
			array (
				'codename' => 'OBT00000480',
				'name' => 'RANTIN  150 MG TAB',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			552 =>
			array (
				'codename' => 'ALK00001498',
				'name' => 'SET HOGY SC GNS-2105',
				'stock' => '12352',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			553 =>
			array (
				'codename' => 'OBT00001041',
				'name' => 'FLUMETHOLON 0,1% EYE DROP 5 ML',
				'stock' => '970',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			554 =>
			array (
				'codename' => 'ALK00000157',
				'name' => 'CYSTOFIX F10,12CM (444212/1)',
				'stock' => '5500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			555 =>
			array (
				'codename' => 'OBT00000691',
				'name' => 'PROPANOLOL 10 MG TABLET GENERIK',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			556 =>
			array (
				'codename' => 'OBT00000386',
				'name' => 'MICARDIS 40 MG TAB (ISI 20)',
				'stock' => '161',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			557 =>
			array (
				'codename' => 'ALK00001490',
				'name' => 'UNIVERSAL SET HOGY (USP-2114)',
				'stock' => '10978',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			558 =>
			array (
				'codename' => 'ALK00001230',
				'name' => 'V-LOC 90 DEVICE 4-0 (VLOCM0003)',
				'stock' => '6919',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			559 =>
			array (
				'codename' => 'ALK00000188',
				'name' => 'DISP SYRINGE 5CC TERUMO',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			560 =>
			array (
				'codename' => 'ALK00000186',
				'name' => 'DISP SYRINGE 3CC TERUMO',
				'stock' => '46',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			561 =>
			array (
				'codename' => 'OBT00000685',
				'name' => 'MICONAZOLE 2% CREAM 10 GR',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			562 =>
			array (
				'codename' => 'OBT00000381',
				'name' => 'MEROBAT 1 GR INJ ',
				'stock' => '5489',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			563 =>
			array (
				'codename' => 'ALK00000109',
				'name' => 'CELSITE ST 305  6.5F SI (4433750)',
				'stock' => '66000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			564 =>
			array (
				'codename' => 'ALK00000185',
				'name' => 'DISP SYRINGE 20CC TERUMO',
				'stock' => '127',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			565 =>
			array (
				'codename' => 'ALK00000184',
				'name' => 'DISP SYRINGE 1CC TUBERCULIN TERUMO',
				'stock' => '70',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			566 =>
			array (
				'codename' => 'OBT00000474',
				'name' => 'PULMICORT 1 MG/2 ML RESP 2 ML (0,5MG/ML)',
				'stock' => '239',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			567 =>
			array (
				'codename' => 'OBT00000374',
				'name' => 'MEBO / SIBRO OINT 20 GR',
				'stock' => '831',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			568 =>
			array (
				'codename' => 'OBT00000677',
				'name' => 'HYDROCHLORTHIAZIDE/HCT 25 MG TAB (100 s) ',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			569 =>
			array (
				'codename' => 'ALK00000183',
				'name' => 'DISP SYRINGE 1CC INSULIN 100IU TERUMO',
				'stock' => '58',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			570 =>
			array (
				'codename' => 'ALK00000138',
				'name' => 'CORE BIOPSY NEEDLE 16-11 (ACE 161153)',
				'stock' => '6699',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			571 =>
			array (
				'codename' => 'OBT00000210',
				'name' => 'DISMENO 100 MG CAP',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			572 =>
			array (
				'codename' => 'ALK00001173',
				'name' => 'SYR INJECTOR 60 MONO FLOW TYPE 2.0 ML/H(CPDH013)',
				'stock' => '4081',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			573 =>
			array (
				'codename' => 'OBT00000207',
				'name' => 'DIPROGENTA OINT 10 GR',
				'stock' => '897',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			574 =>
			array (
				'codename' => 'ALK00000767',
				'name' => 'DIAPER MAMY POKO M ( ISI 12)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			575 =>
			array (
				'codename' => 'ALK00000354',
				'name' => 'HERCULES 3-STAGE WIRE BALON 12-13.5-15 MM(HBD-W-12-13.5-15) ',
				'stock' => '70730',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			576 =>
			array (
				'codename' => 'OBT00000472',
				'name' => 'PROZAC 20 MG CAPSUL',
				'stock' => '130',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			577 =>
			array (
				'codename' => 'OBT00000470',
				'name' => 'PROTEXIN CAPSUL#',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			578 =>
			array (
				'codename' => 'ALK00000765',
				'name' => 'LAPAROTOMY SPONGES X-RAY 170X12CM 8PLY (X-817012)',
				'stock' => '290',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			579 =>
			array (
				'codename' => 'OBT00001126',
				'name' => 'SPORETIK 200 MG TAB  ',
				'stock' => '214',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			580 =>
			array (
				'codename' => 'OBT00000661',
				'name' => 'CEFIXIME 200 MG CAP (100 s)',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			581 =>
			array (
				'codename' => 'ALK00000350',
				'name' => 'HEMOLOK POLYMER CLIP ML',
				'stock' => '1558',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			582 =>
			array (
				'codename' => 'ALK00000133',
				'name' => 'COMPRILAN 8 CM X 5 M (01027-00)',
				'stock' => '624',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			583 =>
			array (
				'codename' => 'OBT00000469',
				'name' => 'PROSTIGMIN 0,5 MG/ML INJEKSI',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			584 =>
			array (
				'codename' => 'ALK00000764',
				'name' => 'LAPAROTOMY SPONGES X-RAY 35X35CM 6 PLY (44406HX)',
				'stock' => '429',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			585 =>
			array (
				'codename' => 'OBT00000466',
				'name' => 'PRONTOSAN GEL 30 ML',
				'stock' => '2420',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			586 =>
			array (
				'codename' => 'ALK00000349',
				'name' => 'HEMODIALYSIS PACK FRESENIUS F1 HDP',
				'stock' => '390',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			587 =>
			array (
				'codename' => 'ALK00000763',
				'name' => 'POUCHES STERICLIN FLAT 7.5CM/200M',
				'stock' => '22605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			588 =>
			array (
				'codename' => 'ALK00000762',
				'name' => 'POUCHES STERICLIN FLAT 25CM/200M',
				'stock' => '14905',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			589 =>
			array (
				'codename' => 'ALK00000591',
				'name' => 'WING NEEDLE NO 25G X 3/4 TERUMO',
				'stock' => '123',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			590 =>
			array (
				'codename' => 'OBT00000461',
				'name' => 'PROFENID 100 MG SUPPOSITORIA',
				'stock' => '156',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			591 =>
			array (
				'codename' => 'ALK00000347',
				'name' => 'HEARTSTART ADULT PLUS PADS M3713A',
				'stock' => '6435',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			592 =>
			array (
				'codename' => 'ALK00001504',
				'name' => 'OPSITE POST OP 6.5 X 5 CM',
				'stock' => '99',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			593 =>
			array (
				'codename' => 'ALK00000156',
				'name' => 'CYLESURE BIO INDICATOR (J 14324)',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			594 =>
			array (
				'codename' => 'OBT00000456',
				'name' => 'PRECEDEX 100 MCG/2 ML INJ#',
				'stock' => '6922',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			595 =>
			array (
				'codename' => 'OBT00000649',
				'name' => 'ACYCLOVIR 400 MG TAB',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			596 =>
			array (
				'codename' => 'OBT00000458',
				'name' => 'PRIMOLUT N 5 MG TAB',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			597 =>
			array (
				'codename' => 'OBT00000204',
				'name' => 'DIOVAN 160 MG TAB',
				'stock' => '156',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			598 =>
			array (
				'codename' => 'ALK00000146',
				'name' => 'CURASPON GELITASPON 80X50X10/70X50X10',
				'stock' => '619',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			599 =>
			array (
				'codename' => 'OBT00000455',
				'name' => 'PRADAXA 110 MG TABLET ',
				'stock' => '259',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			600 =>
			array (
				'codename' => 'ALK00000756',
				'name' => 'WRAPING P. AST 120 X 120 CM (PAPER GREEN)-(0206)',
				'stock' => '140',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			601 =>
			array (
				'codename' => 'OBT00000454',
				'name' => 'POLYMIXIN 500.000 IU INJ',
				'stock' => '5390',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			602 =>
			array (
				'codename' => 'OBT00000198',
				'name' => 'DICYNONE 250MG/AMPUL INJ',
				'stock' => '430',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			603 =>
			array (
				'codename' => 'ALK00000172',
				'name' => 'DIASAFE FRESENIUS',
				'stock' => '12100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			604 =>
			array (
				'codename' => 'OBT00000197',
				'name' => 'DIANE 35 ',
				'stock' => '1084',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			605 =>
			array (
				'codename' => 'ALK00000170',
				'name' => 'DIALYSER-HIGH FLUX H HF 80 S (FMHFHH8)',
				'stock' => '3278',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			606 =>
			array (
				'codename' => 'OBT00000196',
				'name' => 'DIAMICRON MR 60MG',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			607 =>
			array (
				'codename' => 'ALK00001158',
				'name' => 'STOMACH TUBE SILICONE NO 18 SOULMED',
				'stock' => '2326',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			608 =>
			array (
				'codename' => 'ALK00000167',
				'name' => 'DEPPER BALL LARGE (DEPPER CUCI)',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			609 =>
			array (
				'codename' => 'ALK00000754',
				'name' => 'RELIANCE 440 BLUE 75 X 75 CM',
				'stock' => '62',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			610 =>
			array (
				'codename' => 'OBT00000449',
				'name' => 'PERDIPINE 10 MG/10 ML INJ',
				'stock' => '2707',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			611 =>
			array (
				'codename' => 'ALK00000135',
				'name' => 'CONECTING TUBE 2 FUNEL HOSPITEC',
				'stock' => '602',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			612 =>
			array (
				'codename' => 'OBT00000025',
				'name' => 'AMINOLEBAN INF 500 ML OTSUKA',
				'stock' => '2057',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			613 =>
			array (
				'codename' => 'ALK00000131',
				'name' => 'COLPOTOMIZER SURGITOOL',
				'stock' => '14850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			614 =>
			array (
				'codename' => 'BBK00000041',
				'name' => 'C.F.A.S PUC (COBAS 3121305122) new',
				'stock' => '7464',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			615 =>
			array (
				'codename' => 'OBT00000636',
				'name' => 'VAKSIN GARDASIL INJ 0,5 ML',
				'stock' => '8168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			616 =>
			array (
				'codename' => 'ALK00000752',
				'name' => 'RELIANCE 440 BLUE 120 X 120 CM',
				'stock' => '145',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			617 =>
			array (
				'codename' => 'ALK00000377',
				'name' => 'CATHEJELL',
				'stock' => '649',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			618 =>
			array (
				'codename' => 'A2922',
				'name' => 'Testing BARU obat(nama)',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			619 =>
			array (
				'codename' => 'OBT00000022',
				'name' => 'AMINOFLUID INFUS 1000 ML',
				'stock' => '2722',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			620 =>
			array (
				'codename' => 'ALK00000166',
				'name' => 'DELTA-LITE 4 in#',
				'stock' => '2036',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			621 =>
			array (
				'codename' => 'ALK00000162',
				'name' => 'DELTA DRY (5 CMX2.4 M)',
				'stock' => '629',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			622 =>
			array (
				'codename' => 'A071',
				'name' => 'ARDIUM TAB 500 MG',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			623 =>
			array (
				'codename' => 'ALK00001201',
				'name' => 'URINE COLLEC PEAD 100 ML JMS',
				'stock' => '418',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			624 =>
			array (
				'codename' => 'ALK00001190',
				'name' => 'UMBILICAL CATHETER NO.4 ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			625 =>
			array (
				'codename' => 'OBT00000195',
				'name' => 'DEXTROSE 5% 500 ML INF OTSUKA',
				'stock' => '153',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			626 =>
			array (
				'codename' => 'ALK00000161',
				'name' => 'DAWSON MUELLER DRAINAG CATH 8.5FR(ULT8.5-38-25-P-5S-CLDM-HC)',
				'stock' => '32120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			627 =>
			array (
				'codename' => 'ALK00000160',
				'name' => 'DAWSON MUELLER DRAINAG CATH 7FR (ULT7.0-35-25-P-5S-CLDM-HC)',
				'stock' => '30250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			628 =>
			array (
				'codename' => 'OBT00000018',
				'name' => 'ALDACTONE 25 MG TAB',
				'stock' => '17',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			629 =>
			array (
				'codename' => 'ALK00000578',
				'name' => 'VASOFIX SAFETY G18 X 11/4',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			630 =>
			array (
				'codename' => 'ALK00000751',
				'name' => 'RELIANCE 440 BLUE 100 X 100 CM',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			631 =>
			array (
				'codename' => 'ALK00000154',
				'name' => 'CUTIMED SORBACT RIBON 2CM X50 CM (72166-00)',
				'stock' => '902',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			632 =>
			array (
				'codename' => 'ALK00001186',
				'name' => 'TROCAR THORAX FLEXIPATH 7 MM (FP007)',
				'stock' => '13200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			633 =>
			array (
				'codename' => 'ALK00000148',
				'name' => 'CURVED INTRALUMINAL STAPLER 33MM (CDH33A)',
				'stock' => '62700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			634 =>
			array (
				'codename' => 'OBT00000634',
				'name' => 'VAKSIN ENGERIX B PFS 0,5 ML',
				'stock' => '3414',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			635 =>
			array (
				'codename' => 'ALK00000130',
				'name' => 'COLOSTOMY BAG ANAK HOLLISTER (88800)',
				'stock' => '608',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			636 =>
			array (
				'codename' => 'ALK00000121',
				'name' => 'CLINVAC 400 ML L (4P-SL)',
				'stock' => '4675',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			637 =>
			array (
				'codename' => 'OBT00000017',
				'name' => 'ALDACTONE 100 MG TABLET',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			638 =>
			array (
				'codename' => 'ALK00000073',
				'name' => 'BISTURI NO 24 AESCULAP',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			639 =>
			array (
				'codename' => 'ALK00000750',
				'name' => 'CIDEZYME 5 LITER 2260',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			640 =>
			array (
				'codename' => 'OBT00000631',
				'name' => 'VAKSIN AVAXIM 80 (PED) PFS INJ 0,5 ML',
				'stock' => '2935',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			641 =>
			array (
				'codename' => 'ALK00000149',
				'name' => 'CURVED INTRALUMINAL STAPLERS 29MM(CDH29A)',
				'stock' => '62700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			642 =>
			array (
				'codename' => 'OBT00000365',
				'name' => 'LYRICA 75 MG CAP',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			643 =>
			array (
				'codename' => 'OBT00000193',
				'name' => 'DEXTROSE 40% 25 CC OTSUKA',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			644 =>
			array (
				'codename' => 'BBK00000039',
				'name' => 'C.f.a.s (Calibrator for Automated Syten Cobas 10759350190)',
				'stock' => '940',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			645 =>
			array (
				'codename' => 'ALK00000143',
				'name' => 'CRYSTALCLEAR PLUS SET RUSCH NO. 8 (121303-08)',
				'stock' => '3907',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			646 =>
			array (
				'codename' => 'A2911',
				'name' => 'Obat Neng FGHIJ',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			647 =>
			array (
				'codename' => 'ALK00000142',
				'name' => 'CRYSTALCLEAR PLUS SET RUSCH NO. 7 (121303-07)',
				'stock' => '3907',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			648 =>
			array (
				'codename' => 'OBT00000630',
				'name' => 'VAKSIN AVAXIM 160 (ADULT) PFS INJ 0,5 ML',
				'stock' => '3773',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			649 =>
			array (
				'codename' => 'ALK00000139',
				'name' => 'CORONER SET MEDITECH',
				'stock' => '10901',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			650 =>
			array (
				'codename' => 'OBT00000628',
				'name' => 'SANDOSTATIN 0.1 MG/ML INJ 1 ML',
				'stock' => '3071',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			651 =>
			array (
				'codename' => 'ALK00000284',
				'name' => 'FLAT ROLL R39 (5CM X 200 M)',
				'stock' => '3796',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			652 =>
			array (
				'codename' => 'OBT00000627',
				'name' => 'EMLA 5% CREAM 5 GR',
				'stock' => '580',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			653 =>
			array (
				'codename' => 'ALK00000120',
				'name' => 'CLINVAC 100 ML',
				'stock' => '4345',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			654 =>
			array (
				'codename' => 'OBT00000359',
				'name' => 'LIPITOR 10 MG TAB',
				'stock' => '184',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			655 =>
			array (
				'codename' => 'OBT00000011',
				'name' => 'ADONA AC 17 50 MG/10 ML INJ#',
				'stock' => '229',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			656 =>
			array (
				'codename' => 'ALK00000063',
				'name' => 'BIBAG SODIUM BICARBONATE 5008',
				'stock' => '808',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			657 =>
			array (
				'codename' => 'ALK00000065',
				'name' => 'BIOGLUE PRE-FILLED SYRINGE 5 ML (2CRYBG515)',
				'stock' => '17270',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			658 =>
			array (
				'codename' => 'ALK00000112',
				'name' => 'CERTOFIX DUO PAED S413 4FX5 B BRAUN ',
				'stock' => '9075',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			659 =>
			array (
				'codename' => 'ALK00000571',
				'name' => 'URETERAL STENT DOUBLE LOOP 4.7FR-24CM OPEN TIP(ST-394724-32)',
				'stock' => '14300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			660 =>
			array (
				'codename' => 'OBT00000009',
				'name' => 'ADALAT OROS 30 MG TAB',
				'stock' => '82',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			661 =>
			array (
				'codename' => 'ALK00000748',
				'name' => 'WRAPPING PAPER 2VPSWG012 120 X 120 (GREEN)',
				'stock' => '113',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			662 =>
			array (
				'codename' => 'ALK00000134',
				'name' => 'CONE BURR NANAS D7.0 MM (GD064R)',
				'stock' => '7172',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			663 =>
			array (
				'codename' => 'OBT00000624',
				'name' => 'OCTALBIN LAR 25 % INF 100 ML',
				'stock' => '17160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			664 =>
			array (
				'codename' => 'ALK00000129',
				'name' => 'COLOSTOMY BAG + BANTAL (22771)',
				'stock' => '742',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			665 =>
			array (
				'codename' => 'OBT00000623',
				'name' => 'NEBIDO 1000MG/4ML INJEKSI',
				'stock' => '27740',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			666 =>
			array (
				'codename' => 'OBT00000190',
				'name' => 'DEXT 5% + 0,9%NACL 500 ML OTSUKA',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			667 =>
			array (
				'codename' => 'ALK00000330',
				'name' => 'GUDEL 1,5 (7.0) YELLOW INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			668 =>
			array (
				'codename' => 'OBT00000439',
				'name' => 'NOVOMIX-30 FLEXPEN INJ',
				'stock' => '1681',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			669 =>
			array (
				'codename' => 'ALK00000745',
				'name' => 'DEPPER BALL MEDIUM NON X-RAY P-3026',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			670 =>
			array (
				'codename' => 'ALK00000108',
				'name' => 'CELANA PASCA KHITAN (XL)',
				'stock' => '330',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			671 =>
			array (
				'codename' => 'ALK00000053',
				'name' => 'BACTIGRAS 10CM X 10CM',
				'stock' => '148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			672 =>
			array (
				'codename' => 'OBT00000622',
				'name' => 'HUMAN ALBUMIN GRIFOLS 20% 100 ML',
				'stock' => '18150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			673 =>
			array (
				'codename' => 'OBT00000189',
				'name' => 'DEXT 5% + 0,45% NACL 500 ML (1/2 SAL) OT',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			674 =>
			array (
				'codename' => 'ALK00000744',
				'name' => 'DEPPER BALL SMALL (TUVER) P-2010',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			675 =>
			array (
				'codename' => 'OBT00000621',
				'name' => 'EPREX 4000 IU/0,4 ML PREFILLED',
				'stock' => '5541',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			676 =>
			array (
				'codename' => 'BBK00000036',
				'name' => 'BENZODIAZEPINE CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			677 =>
			array (
				'codename' => 'BBK00000285',
				'name' => 'PIPET TETES OBAT',
				'stock' => '24',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			678 =>
			array (
				'codename' => 'BBK00000048',
				'name' => 'COCAIN CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			679 =>
			array (
				'codename' => 'OBT00000620',
				'name' => 'ALBUMIN 20% INFUS 100 ML BEHRING',
				'stock' => '15400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			680 =>
			array (
				'codename' => 'ALK00000106',
				'name' => 'CELANA PASCA KHITAN (M)',
				'stock' => '330',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			681 =>
			array (
				'codename' => 'OBT00000350',
				'name' => 'LESICHOL 600 MG CAP',
				'stock' => '198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			682 =>
			array (
				'codename' => 'BBK00000252',
				'name' => 'AQUASONIQ GEL PARKER 5 LITER',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			683 =>
			array (
				'codename' => 'ALK00000022',
				'name' => 'AEROCHAMBER+FLOW-VU/TIPS HALER PEDIATRIC',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			684 =>
			array (
				'codename' => 'ALK00000030',
				'name' => 'AMBU BLUE SENSOR R (R-00-S)',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			685 =>
			array (
				'codename' => 'ALK00000017',
				'name' => 'ABDOMINAL BINDER SMALL (2060)- OPPO',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			686 =>
			array (
				'codename' => 'OBT00000188',
				'name' => 'DEXT 5 %+0,225%NACL500ML(1/4SAL)',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			687 =>
			array (
				'codename' => 'BBK00000284',
				'name' => 'BOTOL+TUTUP 300 CC',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			688 =>
			array (
				'codename' => 'OBT00000619',
				'name' => 'BONDRONAT 6 MG/6 ML INJ',
				'stock' => '36250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			689 =>
			array (
				'codename' => 'OBT00000426',
				'name' => 'NEO-MERCAZOLE 5 MG TABLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			690 =>
			array (
				'codename' => 'BBK00000029',
				'name' => 'ART TIPS 200 UL',
				'stock' => '266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			691 =>
			array (
				'codename' => 'ALK00000100',
				'name' => 'CAPTUR DISP BIOPSY FORCEPS, NON SPIKED 2.4mm LENGHT 230CM',
				'stock' => '5170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			692 =>
			array (
				'codename' => 'ALK00000124',
				'name' => 'COLD / HOT PACK ',
				'stock' => '324',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			693 =>
			array (
				'codename' => 'ALK00000123',
				'name' => 'COIL CONNECTING TUBE Y-COIL 150 CM (600102)',
				'stock' => '532',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			694 =>
			array (
				'codename' => 'ALK00000118',
				'name' => 'CIRCUIT VENTSTAR HEATED (MP00308)',
				'stock' => '12800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			695 =>
			array (
				'codename' => 'OBT00000618',
				'name' => 'SUPLASYN 1-SHOT 60MG/6ML',
				'stock' => '23100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			696 =>
			array (
				'codename' => 'OBT00000341',
				'name' => 'LANTUS SOLOSTAR 100 IU/ML INJ 3 ML',
				'stock' => '1910',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			697 =>
			array (
				'codename' => 'OBT00000343',
				'name' => 'LAPRAZ 30 MG CAP',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			698 =>
			array (
				'codename' => 'ALK00000322',
				'name' => 'GKE INK ROLL (240-892)',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			699 =>
			array (
				'codename' => 'OBT00000617',
				'name' => 'ZYLORIC 300 MG TAB',
				'stock' => '51',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			700 =>
			array (
				'codename' => 'BBK00000283',
				'name' => 'BOTOL+TUTUP 200 CC',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			701 =>
			array (
				'codename' => 'BBK00000022',
				'name' => 'ANAEROGEN 2.5 LT (AN0025A) - (DIPA)',
				'stock' => '865',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			702 =>
			array (
				'codename' => 'OBT00000616',
				'name' => 'ZYLORIC 100 MG TAB',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			703 =>
			array (
				'codename' => 'OBT00000418',
				'name' => 'NARFOZ 8 MG TAB',
				'stock' => '250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			704 =>
			array (
				'codename' => 'BBK00000282',
				'name' => 'BOTOL + TUTUP 150 CC',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			705 =>
			array (
				'codename' => 'BBK00000280',
				'name' => 'BOTOL +TUTUP 30 CC',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			706 =>
			array (
				'codename' => 'BBK00000021',
				'name' => 'AMPHETAMIN CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			707 =>
			array (
				'codename' => 'OBT00000613',
				'name' => 'YAZ TAB *',
				'stock' => '86',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			708 =>
			array (
				'codename' => 'OBT00000416',
				'name' => 'NARFOZ 4 mg/5 ml SYR 30 ml',
				'stock' => '880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			709 =>
			array (
				'codename' => 'ALK00000548',
				'name' => 'SYRINGE 50ML PERFUSOR BLACKP (8728828)',
				'stock' => '798',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			710 =>
			array (
				'codename' => 'ALK00000004',
				'name' => 'SILICON OIL / OCXYSIL (SIL-1000)',
				'stock' => '22869',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			711 =>
			array (
				'codename' => 'A029',
				'name' => 'Obat Test A',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			712 =>
			array (
				'codename' => 'OBT00000414',
				'name' => 'NARFOZ 4 MG TAB',
				'stock' => '151',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			713 =>
			array (
				'codename' => 'BBK00000238',
				'name' => 'VIDAS TOTAL IGE (60 TEST)',
				'stock' => '70125',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			714 =>
			array (
				'codename' => 'BBK00000279',
				'name' => 'BOTOL+TUTUP 20 CC',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			715 =>
			array (
				'codename' => 'OBT00000334',
				'name' => 'KETESSE 50 MG INJ',
				'stock' => '447',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			716 =>
			array (
				'codename' => 'BBK00000253',
				'name' => 'BRAUNODERM SPRAY 250 ML',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			717 =>
			array (
				'codename' => 'ALK00001124',
				'name' => 'REBREATHING MASK 8120',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			718 =>
			array (
				'codename' => 'OBT00000326',
				'name' => 'KALITAKE 5 GRAM POWDER',
				'stock' => '180',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			719 =>
			array (
				'codename' => 'OBT00000128',
				'name' => 'CENDO TIMOLOL MALEAT/TIMOL 0,5% EYE DROP 5 ML',
				'stock' => '525',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			720 =>
			array (
				'codename' => 'ALK00000110',
				'name' => 'CELSITE ST 305  8.5 F SI (4433750)',
				'stock' => '66000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			721 =>
			array (
				'codename' => 'ALK00000107',
				'name' => 'CELANA PASCA KHITAN (S)',
				'stock' => '330',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			722 =>
			array (
				'codename' => 'ALK00000104',
				'name' => 'CAUTERY PENCIL BOVIE',
				'stock' => '2700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			723 =>
			array (
				'codename' => 'OBT00000408',
				'name' => 'NACL 0,9% INFUS 1000 ML OTSUKA',
				'stock' => '307',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			724 =>
			array (
				'codename' => 'OBT00000609',
				'name' => 'XARELTO 10 MG TAB',
				'stock' => '322',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			725 =>
			array (
				'codename' => 'OBT00000404',
				'name' => 'MYCO Z OINTMENT 10 GRAM',
				'stock' => '742',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			726 =>
			array (
				'codename' => 'OBT00000973',
				'name' => 'DIBEKACIN 100 MG INJ',
				'stock' => '890',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			727 =>
			array (
				'codename' => 'OBT00000974',
				'name' => 'FOLAMIL GENIO SOFTCAP',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			728 =>
			array (
				'codename' => 'ALK00000072',
				'name' => 'BISTURI NO 20 AESCULAP',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			729 =>
			array (
				'codename' => 'ALK00000060',
				'name' => 'BETAPLAST-F 5 X 20 CM',
				'stock' => '1540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			730 =>
			array (
				'codename' => 'OBT00000184',
				'name' => 'DECUBAL CREAM 40 GRAM ',
				'stock' => '399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			731 =>
			array (
				'codename' => 'OBT00000126',
				'name' => 'CENDO POLYGRAN EYE OINTMENT',
				'stock' => '204',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			732 =>
			array (
				'codename' => 'OBT00000125',
				'name' => 'CENDO POLYDEX EYE DROP 5 ML',
				'stock' => '393',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			733 =>
			array (
				'codename' => 'ALK00000093',
				'name' => 'BREATHING TUBE HEATED ADULT AIRVO2 (900PT501)',
				'stock' => '18018',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			734 =>
			array (
				'codename' => 'ALK00000089',
				'name' => 'BREATHABLE WRIST SUPPORT M/S (EH-373-S/M)',
				'stock' => '2552',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			735 =>
			array (
				'codename' => 'ALK00000086',
				'name' => 'BOUGIE BOUSSIGNAC ADULT (5576.01)',
				'stock' => '4400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			736 =>
			array (
				'codename' => 'BBK00000019',
				'name' => 'ALP (COBAS 3333752190)',
				'stock' => '7392',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			737 =>
			array (
				'codename' => 'OBT00000971',
				'name' => 'CENDO TROPIN 0,5% EYE DROP 5 ML',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			738 =>
			array (
				'codename' => 'ALK00000094',
				'name' => 'BUTTON SWITCH PENCIL (E-2516-H)',
				'stock' => '2772',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			739 =>
			array (
				'codename' => 'OBT00000970',
				'name' => 'CENDO GIFLOX MINIDOSE',
				'stock' => '883',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			740 =>
			array (
				'codename' => 'OBT00000608',
				'name' => 'XANAX 1 MG TAB',
				'stock' => '61',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			741 =>
			array (
				'codename' => 'ALK00000544',
				'name' => 'SURPLUG EXTENTION TUBES 20 CM LOCK(SP*ET105LISA)',
				'stock' => '708',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			742 =>
			array (
				'codename' => 'OBT00000604',
				'name' => 'VOMETA 1 MG/ML SYR 60 ML',
				'stock' => '434',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			743 =>
			array (
				'codename' => 'ALK00000084',
				'name' => 'BONEWAX B-BRAUN (102975/4)',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			744 =>
			array (
				'codename' => 'OBT00000395',
				'name' => 'MORPHINE 10 MG INJ',
				'stock' => '340',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			745 =>
			array (
				'codename' => 'ALK00000079',
				'name' => 'BLOOD SET W/ 200 MICRON FILTER, 2 CLAVE,ROTATING LUER',
				'stock' => '1258',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			746 =>
			array (
				'codename' => 'ALK00000078',
				'name' => 'BLOOD SET (TB-U800L11) TERUMO',
				'stock' => '280',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			747 =>
			array (
				'codename' => 'OBT00000123',
				'name' => 'CENDO MYDRIATYL 0.5% EYE DROP 5 ML',
				'stock' => '318',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			748 =>
			array (
				'codename' => 'OBT00000115',
				'name' => 'CENDO CARPINE 2% EYE DROP 5 ML',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			749 =>
			array (
				'codename' => 'OBT00000969',
				'name' => 'PROLIC 300MG CAPSUL',
				'stock' => '54',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			750 =>
			array (
				'codename' => 'ALK00000307',
				'name' => 'FOLLEY CATHETER 2WAY 20 RUSCH#',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			751 =>
			array (
				'codename' => 'ALK00000056',
				'name' => 'BAROVAC 3,2 PS400M',
				'stock' => '3341',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			752 =>
			array (
				'codename' => 'OBT00000394',
				'name' => 'MONURIL GRANUL 3 GRAM SACHET',
				'stock' => '1800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			753 =>
			array (
				'codename' => 'OBT00000968',
				'name' => 'PROLIC 150MG CAPSUL',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			754 =>
			array (
				'codename' => 'ALK00000045',
				'name' => 'ASKINA SOFT CLEAR 7. 5 X 5',
				'stock' => '113',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			755 =>
			array (
				'codename' => 'OBT00000967',
				'name' => 'CLINDAMYCIN 300 MG CAP (50s)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			756 =>
			array (
				'codename' => 'BBK00000230',
				'name' => 'VIDAS AFP (30413)',
				'stock' => '61897',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			757 =>
			array (
				'codename' => 'ALK00000543',
				'name' => 'SURGIPRO 4-0 SP5699G',
				'stock' => '1375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			758 =>
			array (
				'codename' => 'BBK00000224',
				'name' => 'UX II PACK-BAC AR379938',
				'stock' => '24402',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			759 =>
			array (
				'codename' => 'OBT00000965',
				'name' => 'BIOLINCOM SYRUP',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			760 =>
			array (
				'codename' => 'ALK00000317',
				'name' => 'FUSION OASIS 10 FR PLASTIC BILLIARY STENT (FS-OA-10) NEW',
				'stock' => '30690',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			761 =>
			array (
				'codename' => 'OBT00000389',
				'name' => 'MICARDIS PLUS 80 MG TAB',
				'stock' => '208',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			762 =>
			array (
				'codename' => 'OBT00000964',
				'name' => 'CETIRIZINE 5MG/60ML SYR',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			763 =>
			array (
				'codename' => 'OBT00000603',
				'name' => 'VOMCERAN 8 MG/ 4ML INJ',
				'stock' => '570',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			764 =>
			array (
				'codename' => 'ALK00000541',
				'name' => 'SURGEON CAP BLUE',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			765 =>
			array (
				'codename' => 'ALK00000090',
				'name' => 'BREATHING CIRCUIT 1,6 M COAXIAL UNIFLOW SYSTEM+FILTER(2900)',
				'stock' => '2170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			766 =>
			array (
				'codename' => 'OBT00000962',
				'name' => 'MALTOFER TAB CHEWABLE',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			767 =>
			array (
				'codename' => 'OBT00000602',
				'name' => 'VOMCERAN 8 MG TAB',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			768 =>
			array (
				'codename' => 'OBT00000597',
				'name' => 'VISANNE TABLET 2 MG',
				'stock' => '5247',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			769 =>
			array (
				'codename' => 'ALK00000343',
				'name' => 'HARMONIC FOCUS CURVED SHEARS 17 CM (HAR17)',
				'stock' => '19360',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			770 =>
			array (
				'codename' => 'ALK00000059',
				'name' => 'BEDLINER CARE 100 X 190 CM',
				'stock' => '425',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			771 =>
			array (
				'codename' => 'ALK00000070',
				'name' => 'BISTURI NO 11 AESCULAP',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			772 =>
			array (
				'codename' => 'ALK00000062',
				'name' => 'BIBAG PART B FRESENIUS 650GR REGULER',
				'stock' => '808',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			773 =>
			array (
				'codename' => 'OBT00000599',
				'name' => 'VOLTAREN 25 MG TAB',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			774 =>
			array (
				'codename' => 'OBT00000960',
				'name' => 'ARTRODAR 50 MG TAB#',
				'stock' => '93',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			775 =>
			array (
				'codename' => 'OBT00000595',
				'name' => 'VESICARE 10MG TABLET',
				'stock' => '207',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			776 =>
			array (
				'codename' => 'OBT00000594',
				'name' => 'VERMOX 500 MG TAB',
				'stock' => '175',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			777 =>
			array (
				'codename' => 'ALK00000033',
				'name' => 'ANIOSYME DD1 (HEXANIOS G+R)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			778 =>
			array (
				'codename' => 'OBT00000957',
				'name' => 'INPEPSA 500 MG/5 ML SUSP 100 ML',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			779 =>
			array (
				'codename' => 'ALK00000540',
				'name' => 'SURFLO IV CATH 20G X 11/4',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			780 =>
			array (
				'codename' => 'ALK00000028',
				'name' => 'ALLEVYN NON-ADHESIVE 10 X 20 CM',
				'stock' => '1005',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			781 =>
			array (
				'codename' => 'OBT00000958',
				'name' => 'BISOPROLLOL FUMARAT 5 MG TAB',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			782 =>
			array (
				'codename' => 'OBT00000178',
				'name' => 'CYCLO PROGYNOVA TAB',
				'stock' => '1685',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			783 =>
			array (
				'codename' => 'OBT00000593',
				'name' => 'VENTOLIN NEBULES 2,5 MG AMPUL',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			784 =>
			array (
				'codename' => 'OBT00000110',
				'name' => 'CELEBREX 100 MG CAP',
				'stock' => '105',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			785 =>
			array (
				'codename' => 'ALK00000057',
				'name' => 'BAROVAC 400ML PS400L',
				'stock' => '5170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			786 =>
			array (
				'codename' => 'ALK00000055',
				'name' => 'BALLOON REPLACEMENT GASTROSTOMY TUBE 24 FR (PEG-24-BRT-S)',
				'stock' => '17380',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			787 =>
			array (
				'codename' => 'ALK00000052',
				'name' => 'BACTERIAL VIRAL/FILTER (1605)',
				'stock' => '657',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			788 =>
			array (
				'codename' => 'ALK00000047',
				'name' => 'ASKINA SOFT CLEAR 9 X 15',
				'stock' => '231',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			789 =>
			array (
				'codename' => 'ALK00000741',
				'name' => 'FLAT ROLL R47 (40CMX200M)',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			790 =>
			array (
				'codename' => 'OBT00000592',
				'name' => 'VENTOLIN EXP SYR 100 ML',
				'stock' => '573',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			791 =>
			array (
				'codename' => 'ALK00000299',
				'name' => 'FOLLEY CATHETER 2 WAY SILICON 08 RUSCH',
				'stock' => '1851',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			792 =>
			array (
				'codename' => 'ALK00000014',
				'name' => 'ABBOCATH-T 18 G',
				'stock' => '10000000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			793 =>
			array (
				'codename' => 'A031',
				'name' => 'ZISTIC 1405',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			794 =>
			array (
				'codename' => 'OBT00000177',
				'name' => 'CRESTOR 40 MG TAB',
				'stock' => '271',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			795 =>
			array (
				'codename' => 'ALK00000044',
				'name' => 'ARTERIAL LEADER CATHETER 3 FR - 8 CM (115.090)',
				'stock' => '8000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			796 =>
			array (
				'codename' => 'ALK00000042',
				'name' => 'ARMSLING UKURAN M BERWARNA',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			797 =>
			array (
				'codename' => 'ALK00000041',
				'name' => 'ARMSLING UKURAN L BERWARNA',
				'stock' => '198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			798 =>
			array (
				'codename' => 'ALK00000038',
				'name' => 'AQUACEL Ag EXTRA (10 CM X 10 CM) (403708)',
				'stock' => '1572',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			799 =>
			array (
				'codename' => 'BBK00000278',
				'name' => 'PRECI CONTROL ANTI-SARS-COV-2(2XIML:LEVEL 1 & LEVEL 2 )',
				'stock' => '10400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			800 =>
			array (
				'codename' => 'ALK00000296',
				'name' => 'FOGARTY ARTERIAL EMBOLECTOMY CATHETER 7 F',
				'stock' => '24200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			801 =>
			array (
				'codename' => 'OBT00000309',
				'name' => 'INFUSAN RING AS DP',
				'stock' => '221',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			802 =>
			array (
				'codename' => 'OBT00000596',
				'name' => 'VESTEIN CAPSUL 300MG',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			803 =>
			array (
				'codename' => 'ALK00001666',
				'name' => 'MASKER 3M 8210V',
				'stock' => '260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			804 =>
			array (
				'codename' => 'CGN-A001',
				'name' => 'panadol cair',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			805 =>
			array (
				'codename' => 'ALK00000539',
				'name' => 'SURFLO IV CATH 18 G X 2',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			806 =>
			array (
				'codename' => 'OBT00000586',
				'name' => 'VANCEP 500 MG INJ',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			807 =>
			array (
				'codename' => 'OBT00000305',
				'name' => 'INDEXON 5 MG/1 ML INJ',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			808 =>
			array (
				'codename' => 'ALK00000011',
				'name' => 'A.V. FISTULA FRES BIRU 16GVF25',
				'stock' => '113',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			809 =>
			array (
				'codename' => 'OBT00000590',
				'name' => 'VENTOLIN 2 MG TAB',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			810 =>
			array (
				'codename' => 'OBT00000731',
				'name' => 'SUSU PEPTISOL 190 GR VANILLA',
				'stock' => '617',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			811 =>
			array (
				'codename' => 'ALK00000034',
				'name' => 'ANKLE FOOT ORTHOSIS-RIGID CHILD (ORL04A)',
				'stock' => '22000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			812 =>
			array (
				'codename' => 'OBT00000379',
				'name' => 'MEPTIN 0,05 MG TAB',
				'stock' => '48',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			813 =>
			array (
				'codename' => 'OBT00000303',
				'name' => 'INCIDAL OD 10 MG CAP',
				'stock' => '31',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			814 =>
			array (
				'codename' => 'ALK00000024',
				'name' => 'ALCOHOL SWAB PASTIK METZ',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			815 =>
			array (
				'codename' => 'ALK00000025',
				'name' => 'ALERT CLIP RED (SATO)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			816 =>
			array (
				'codename' => 'OBT00000176',
				'name' => 'CRESTOR 20 MG TAB',
				'stock' => '237',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			817 =>
			array (
				'codename' => 'OBT00000108',
				'name' => 'CEFSPAN 100 MG/5 ML DRY SYR 30 ML',
				'stock' => '898',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			818 =>
			array (
				'codename' => 'A2957',
				'name' => 'LASIX 40MG TAB',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			819 =>
			array (
				'codename' => 'OBT00001309',
				'name' => 'AZTRIN 500 MG TABLET  ',
				'stock' => '300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			820 =>
			array (
				'codename' => 'OBT00000956',
				'name' => 'MINOSEP GARGLE 150 ML (MERAH)',
				'stock' => '355',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			821 =>
			array (
				'codename' => 'OBT00000579',
				'name' => 'VAKSIN MENIVAX ACYW INJ  ',
				'stock' => '1956',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			822 =>
			array (
				'codename' => 'ALK00000537',
				'name' => 'SURFLO IV CATH 14G X 2',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			823 =>
			array (
				'codename' => 'ALK00000083',
				'name' => 'BONE MARROW BIOPSY NEEDLE 11 G X 100 MM SURELOCK',
				'stock' => '7700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			824 =>
			array (
				'codename' => 'ALK00000982',
				'name' => 'LEUCOPLAST 4.5 M X 7.50 CM (1625)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			825 =>
			array (
				'codename' => 'BBK00000017',
				'name' => 'ADP (AggRam)',
				'stock' => '5148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			826 =>
			array (
				'codename' => 'ALK00000340',
				'name' => 'HANSAPLAST LEMBAR',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			827 =>
			array (
				'codename' => 'ALK00000021',
				'name' => 'ADULT MASK GEA 8110#',
				'stock' => '212',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			828 =>
			array (
				'codename' => 'OBT00000954',
				'name' => 'PROVERA 100 MG TAB',
				'stock' => '166',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			829 =>
			array (
				'codename' => 'ALK00000289',
				'name' => 'FLAT ROLL R44 (25CMX200M)',
				'stock' => '15906',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			830 =>
			array (
				'codename' => 'BBK00000277',
				'name' => 'ELECYS ANTI SARS-COV-2',
				'stock' => '310',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			831 =>
			array (
				'codename' => 'OBT00000588',
				'name' => 'V-BLOC 6,25 MG TAB',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			832 =>
			array (
				'codename' => 'OBT00000376',
				'name' => 'MEDIAMER B6 TAB',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			833 =>
			array (
				'codename' => 'OBT00000582',
				'name' => 'VAKSIN POLIO BIVALEN',
				'stock' => '1060',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			834 =>
			array (
				'codename' => 'ALK00000337',
				'name' => 'GUIDING CATHETER CORDIS XB 3.5 - 6 FR 100 CM (670-054-00 )',
				'stock' => '29491',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			835 =>
			array (
				'codename' => 'ALK00000015',
				'name' => 'ABDOMINAL BINDER LARGE (2060)- OPPO',
				'stock' => '5951',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			836 =>
			array (
				'codename' => 'ALK00000013',
				'name' => 'ABBOCATH-T 16 G GREY (G714A01)-ABBOTT',
				'stock' => '54000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			837 =>
			array (
				'codename' => 'ALK00000536',
				'name' => 'SUPRASORB H THIN 5 X 10 CM (20410)',
				'stock' => '500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			838 =>
			array (
				'codename' => 'ALK00000080',
				'name' => 'BLOODLINE FRESENIUS',
				'stock' => '977',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			839 =>
			array (
				'codename' => 'OBT00000572',
				'name' => 'URIXIN 400 MG TABLET',
				'stock' => '123',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			840 =>
			array (
				'codename' => 'OBT00000570',
				'name' => 'URDAFALK 250 MG CAP',
				'stock' => '95',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			841 =>
			array (
				'codename' => 'ALK00000010',
				'name' => 'A.V FISTULA FRES MERAH 16GAF25',
				'stock' => '113',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			842 =>
			array (
				'codename' => 'ALK00000001',
				'name' => 'GUIDE WIRE ANGLED 0.035-180 CM (RF*GA35183M)',
				'stock' => '4400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			843 =>
			array (
				'codename' => 'OBT00000576',
				'name' => 'UTROGESTAN 200 MG SOFT CAP',
				'stock' => '214',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			844 =>
			array (
				'codename' => 'OBT00000373',
				'name' => 'MAXICEF 1 GRAM INJ',
				'stock' => '2945',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			845 =>
			array (
				'codename' => 'A2964',
				'name' => 'TERMOREX ANAK',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			846 =>
			array (
				'codename' => 'A2950',
				'name' => 'ALMACON',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			847 =>
			array (
				'codename' => 'A2850',
				'name' => 'ANBACIN INJEKSI',
				'stock' => '643',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			848 =>
			array (
				'codename' => 'OBT00000568',
				'name' => 'ULTRAPROCT OINT 10GR /N CREAM',
				'stock' => '1082',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			849 =>
			array (
				'codename' => 'A2958',
				'name' => 'OBAT INJEKSI A',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			850 =>
			array (
				'codename' => 'CGN-A5805',
				'name' => 'ABILIFY TAB 5 MG - 1',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			851 =>
			array (
				'codename' => 'OBT00000288',
				'name' => 'HEPTASAN 4 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			852 =>
			array (
				'codename' => 'ALK00000739',
				'name' => 'VICRYL 1 J347H',
				'stock' => '1220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			853 =>
			array (
				'codename' => 'OBT00000574',
				'name' => 'UROTRACTIN 400 MG CAP',
				'stock' => '34',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			854 =>
			array (
				'codename' => 'OBT00000569',
				'name' => 'ULTRAPROCT SUPPOSITORIA',
				'stock' => '159',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			855 =>
			array (
				'codename' => 'ALK00000334',
				'name' => 'GUIDE WIRE 0,032 - 180CM ANGLED TIP (RF-G32183M)',
				'stock' => '4400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			856 =>
			array (
				'codename' => 'ALK00000535',
				'name' => 'SUCTION LINEAR BAG WHITE 2L',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			857 =>
			array (
				'codename' => 'A032',
				'name' => 'Obat Doco C',
				'stock' => '190',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			858 =>
			array (
				'codename' => 'ALK00000766',
				'name' => 'LAPAROTOMY SPONGES X-RAY 23X23CM 3 PLY',
				'stock' => '78',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			859 =>
			array (
				'codename' => 'OBT00000985',
				'name' => 'CENDO HERVIS EYE OINTMENT',
				'stock' => '404',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			860 =>
			array (
				'codename' => 'ALK00000760',
				'name' => 'POUCHES STERICLIN FLAT 10CM/200M',
				'stock' => '8950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			861 =>
			array (
				'codename' => 'OBT00000567',
				'name' => 'ULTRACET TAB',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			862 =>
			array (
				'codename' => 'A5884',
				'name' => 'Obat Cek Adjustment',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			863 =>
			array (
				'codename' => 'ALK00000738',
				'name' => 'SURGICAL GOWN M HOGY SG-SMS-12KT',
				'stock' => '915',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			864 =>
			array (
				'codename' => 'BBK00000214',
				'name' => 'TOLUENE 4000 ML',
				'stock' => '10780',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			865 =>
			array (
				'codename' => 'BBK00000016',
				'name' => 'Actin FS (CS B421820)',
				'stock' => '1030',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			866 =>
			array (
				'codename' => 'ALK00001022',
				'name' => 'MONOCRYL 5/0 Y 493 ',
				'stock' => '1917',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			867 =>
			array (
				'codename' => 'A078',
				'name' => 'DEGIROL TABLET',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			868 =>
			array (
				'codename' => 'ALK00000533',
				'name' => 'SUCTION CONNECTING TUBE 3 M (NCS-018)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			869 =>
			array (
				'codename' => 'OBT00000562',
				'name' => 'TRIOFUSIN 500 INFUS 500 ML',
				'stock' => '847',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			870 =>
			array (
				'codename' => 'OBT00000564',
				'name' => 'TWYNSTA 80/10 MG TAB ',
				'stock' => '254',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			871 =>
			array (
				'codename' => 'ALK00000331',
				'name' => 'GUDEL 2 (8.0) GREEN INTERSURGICAL',
				'stock' => '197',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			872 =>
			array (
				'codename' => 'OBT00000284',
				'name' => 'HEMAPO 3000 IU INJ',
				'stock' => '1288',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			873 =>
			array (
				'codename' => 'OBT00000563',
				'name' => 'TRIZEDON MR-35 MG TAB',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			874 =>
			array (
				'codename' => 'OBT00001324',
				'name' => 'ANPIRIDE 3 MG TABLET',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			875 =>
			array (
				'codename' => 'BBK00000210',
				'name' => 'SS AGAR OXOID (CM0099B)',
				'stock' => '11070',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			876 =>
			array (
				'codename' => 'A026',
				'name' => 'Gliquidone',
				'stock' => '300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			877 =>
			array (
				'codename' => 'ALK00000531',
				'name' => 'SUCTION CATHETER 6 FASTFLOW',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			878 =>
			array (
				'codename' => 'BBK00000207',
				'name' => 'RUBELLA IG G II ( VIDAS 30221 )',
				'stock' => '56650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			879 =>
			array (
				'codename' => 'OBT00000561',
				'name' => 'TRIDEX 27B INFUS 500 ML#',
				'stock' => '107',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			880 =>
			array (
				'codename' => 'ALK00000329',
				'name' => 'GUDEL 1 (6.5 ) WHITE INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			881 =>
			array (
				'codename' => 'ALK00000530',
				'name' => 'SUCTION CATHETER 14 FASTFLOW/REMEDI',
				'stock' => '102',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			882 =>
			array (
				'codename' => 'OBT00001322',
				'name' => 'ANPIRIDE 1 MG TABLET',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			883 =>
			array (
				'codename' => 'OBT00000560',
				'name' => 'TRIATEC 5 MG TAB',
				'stock' => '144',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			884 =>
			array (
				'codename' => 'OBT00000283',
				'name' => 'HALOPERIDOL 5 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			885 =>
			array (
				'codename' => 'ALK00000271',
				'name' => 'FEEDING DRIP SET BURET 100ML JMS',
				'stock' => '1980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			886 =>
			array (
				'codename' => 'BBK00000199',
				'name' => 'MAC-CONKEY AGAR NO.3 OXOID (CM0115B)',
				'stock' => '12870',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			887 =>
			array (
				'codename' => 'OBT00000953',
				'name' => 'CIPROFLOXACIN 500 MG GENERIK',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			888 =>
			array (
				'codename' => 'OBT00001207',
				'name' => 'METHYLPREDNISOLONE 16 MG TAB',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			889 =>
			array (
				'codename' => 'BBK00000186',
				'name' => 'ID-DILUENT 2 (500ML)',
				'stock' => '36590',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			890 =>
			array (
				'codename' => 'ALK00000529',
				'name' => 'SUCTION CATHETER 12 FASTFLOW-REMIDI',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			891 =>
			array (
				'codename' => 'A047',
				'name' => 'Colistin',
				'stock' => '250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			892 =>
			array (
				'codename' => 'BBK00000013',
				'name' => 'ACCUTREND CHOLESTEROL (11418262171)',
				'stock' => '134',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			893 =>
			array (
				'codename' => 'ALK00000528',
				'name' => 'SUCTION CATHETER 10 REMEDI/HOSPITEX',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			894 =>
			array (
				'codename' => 'OBT00000367',
				'name' => 'MAGNESIUM SULFAT 20% INJ 25 CC (MGSO4)',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			895 =>
			array (
				'codename' => 'OBT00000183',
				'name' => 'DECUBAL CREAM 20 GRAM',
				'stock' => '327',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			896 =>
			array (
				'codename' => 'ALK00001670',
				'name' => 'PAKET STERIL TAMPON VAGINAL S (ISI 3)',
				'stock' => '1614',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			897 =>
			array (
				'codename' => 'OBT00000280',
				'name' => 'GLUCOVANCE 500/2.5 MG TAB#',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			898 =>
			array (
				'codename' => 'OBT00000096',
				'name' => 'CATAFLAM 50 MG TAB',
				'stock' => '57',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			899 =>
			array (
				'codename' => 'OBT00000364',
				'name' => 'LOVENOX 60MG/0.6ML INJ',
				'stock' => '2483',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			900 =>
			array (
				'codename' => 'ALK00000323',
				'name' => 'GLO-TIP ERCP CATHETER, ULTRA TAPER TO 4FR TIP (GT-1-UT)',
				'stock' => '16500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			901 =>
			array (
				'codename' => 'ALK00001691',
				'name' => 'SENSI NITRIL DISPOSABLE GLOVE LARGE (40 PCS)',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			902 =>
			array (
				'codename' => 'OBT00000095',
				'name' => 'CATAFLAM 25 MG TAB',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			903 =>
			array (
				'codename' => 'OBT00000952',
				'name' => 'OCULENTA GEL',
				'stock' => '703',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			904 =>
			array (
				'codename' => 'OBT00000558',
				'name' => 'TRIATEC 10 MG TABLET /',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			905 =>
			array (
				'codename' => 'ALK00000527',
				'name' => 'STOMACH TUBE SILICONE NO 16 ',
				'stock' => '2585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			906 =>
			array (
				'codename' => 'OBT00000557',
				'name' => 'TREMENZA TAB',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			907 =>
			array (
				'codename' => 'A036',
				'name' => 'Warfarin',
				'stock' => '600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			908 =>
			array (
				'codename' => 'ALK00001085',
				'name' => 'PLAIN GUT 5-0 1626G',
				'stock' => '1644',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			909 =>
			array (
				'codename' => 'BBK00000183',
				'name' => 'HbsAG QC KIT(CENTAUR)',
				'stock' => '70088',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			910 =>
			array (
				'codename' => 'ALK00001690',
				'name' => 'SENSI NITRIL DISPOSABLE GLOVE MEDIUM (40 PCS)',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			911 =>
			array (
				'codename' => 'ALK00000526',
				'name' => 'STOMACH TUBE SILICONE NO 14',
				'stock' => '2585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			912 =>
			array (
				'codename' => 'ALK00000316',
				'name' => 'FOLLEY CATHETER 3WAY 24 RUSH',
				'stock' => '565',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			913 =>
			array (
				'codename' => 'ALK00000263',
				'name' => 'EXTERNAL DRAINAGE MEDIUM',
				'stock' => '38709',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			914 =>
			array (
				'codename' => 'OBT00000556',
				'name' => 'TREMENZA SYR 60 ML',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			915 =>
			array (
				'codename' => 'OBT00000950',
				'name' => 'VITAMIN D3 1000 IU SOFTCAP',
				'stock' => '31',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			916 =>
			array (
				'codename' => 'ALK00000734',
				'name' => 'STERIL GAMMEX LATEX SENSITIVE NO. 8 (GLS)',
				'stock' => '286',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			917 =>
			array (
				'codename' => 'ALK00000262',
				'name' => 'EXTERNAL DRAINAGE LARGE',
				'stock' => '38709',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			918 =>
			array (
				'codename' => 'OBT00000272',
				'name' => 'GELAFUSAL 4 % INF 500 ML',
				'stock' => '1750',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			919 =>
			array (
				'codename' => 'OBT00001206',
				'name' => 'METHYLPREDNISOLONE 8 MG TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			920 =>
			array (
				'codename' => 'OBT00000555',
				'name' => 'TRAMAL 100 MG/2 ML INJ 2 ML',
				'stock' => '266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			921 =>
			array (
				'codename' => 'OBT00000271',
				'name' => 'GASTRUL TAB#',
				'stock' => '114',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			922 =>
			array (
				'codename' => 'OBT00001142',
				'name' => 'ALOVELL 10 MG TAB',
				'stock' => '92',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			923 =>
			array (
				'codename' => 'BBK00000178',
				'name' => 'FLUOROCELL WNR (XN CP 066715)',
				'stock' => '49500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			924 =>
			array (
				'codename' => 'ALK00000261',
				'name' => 'EXTENSION TUBE ET 2 LUER SLIP 1000 MM(803-0121/02-00-072-02)',
				'stock' => '396',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			925 =>
			array (
				'codename' => 'OBT00000552',
				'name' => 'TRAJENTA DUO 2,5/500 MG TAB',
				'stock' => '1000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			926 =>
			array (
				'codename' => 'A076',
				'name' => 'CRESTOR TAB 10 MG',
				'stock' => '183',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			927 =>
			array (
				'codename' => 'A082',
				'name' => 'Obat Test Adjustment - Max 2',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			928 =>
			array (
				'codename' => 'ALK00001689',
				'name' => 'SENSI NITRIL DISPOSABLE GLOVE SMALL (40 PCS)',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			929 =>
			array (
				'codename' => 'ALK00000314',
				'name' => 'FOLLEY CATHETER 3WAY 20 RUSCH#',
				'stock' => '866',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			930 =>
			array (
				'codename' => 'OBT00000356',
				'name' => 'LIORESAL 10 MG TAB',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			931 =>
			array (
				'codename' => 'BBK00000011',
				'name' => 'TOTAL PROTEIN URINE/CSF GEN.3 (COBAS 3333825190)',
				'stock' => '4320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			932 =>
			array (
				'codename' => 'OBT00000355',
				'name' => 'LEVOPRONT SYRUP 120 ML',
				'stock' => '672',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			933 =>
			array (
				'codename' => 'ALK00000733',
				'name' => 'STERIL GLOVE GAMMEX LATEX PF NO. 7',
				'stock' => '231',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			934 =>
			array (
				'codename' => 'ALK00000069',
				'name' => 'BISTURI NO 10 AESCULAP',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			935 =>
			array (
				'codename' => 'ALK00001688',
				'name' => 'HEMOLOK CLIP L',
				'stock' => '1375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			936 =>
			array (
				'codename' => 'A067',
				'name' => 'ALUPENT TAB',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			937 =>
			array (
				'codename' => 'ALK00000313',
				'name' => 'FOLLEY CATHETER 2WAY SILICON 20 RUSCH',
				'stock' => '951',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			938 =>
			array (
				'codename' => 'ALK00000310',
				'name' => 'FOLLEY CATHETER 2WAY 8 RUSCH',
				'stock' => '894',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			939 =>
			array (
				'codename' => 'OBT00000353',
				'name' => 'LEVOCIN 500 MG TAB',
				'stock' => '396',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			940 =>
			array (
				'codename' => 'ALK00000305',
				'name' => 'FOLLEY CATHETER 2WAY 16 RUSCH',
				'stock' => '148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			941 =>
			array (
				'codename' => 'A2925',
				'name' => 'Obat Expired 3',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			942 =>
			array (
				'codename' => 'A2934',
				'name' => 'MERCAPTOPURIN TAB',
				'stock' => '109',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			943 =>
			array (
				'codename' => 'A2933',
				'name' => 'LEUCOVORIN TAB',
				'stock' => '215',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			944 =>
			array (
				'codename' => 'A2937',
				'name' => 'LANOXIN TABLET',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			945 =>
			array (
				'codename' => 'A2935',
				'name' => 'METHOTREXATE TAB',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			946 =>
			array (
				'codename' => 'A2927',
				'name' => 'Benang Dewasa',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			947 =>
			array (
				'codename' => 'A2926',
				'name' => 'Benang Anak',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			948 =>
			array (
				'codename' => 'A2924',
				'name' => 'Obat Expired 2',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			949 =>
			array (
				'codename' => 'A2946',
				'name' => 'ATIVAN 1 MG TAB',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			950 =>
			array (
				'codename' => 'ALK00000300',
				'name' => 'FOLLEY CATHETER 2 WAY SILICON 10 RUSCH',
				'stock' => '1851',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			951 =>
			array (
				'codename' => 'A2954',
				'name' => 'Obat Non Oral ABC',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			952 =>
			array (
				'codename' => 'A2955',
				'name' => 'Obat Non Oral DEF',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			953 =>
			array (
				'codename' => 'A2943',
				'name' => 'NEUROBION FORTE 5K TAB',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			954 =>
			array (
				'codename' => 'A2941',
				'name' => 'NEUROBION TAB',
				'stock' => '1000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			955 =>
			array (
				'codename' => 'A2953',
				'name' => 'Obat Oral GHI',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			956 =>
			array (
				'codename' => 'A2949',
				'name' => 'PUYER',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			957 =>
			array (
				'codename' => 'ALK00001525',
				'name' => 'IOBAN 6650 3M',
				'stock' => '2950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			958 =>
			array (
				'codename' => 'OBT00000551',
				'name' => 'TRAJENTA 5 MG TAB',
				'stock' => '173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			959 =>
			array (
				'codename' => 'OBT00000265',
				'name' => 'FREGO 5 MG TAB',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			960 =>
			array (
				'codename' => 'A040',
				'name' => 'Vitamin A',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			961 =>
			array (
				'codename' => 'ALK00000297',
				'name' => 'FOLEY CATHETER SILICONE 2 WAY 22 FR FORTUNE',
				'stock' => '1072',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			962 =>
			array (
				'codename' => 'OBT00000549',
				'name' => 'TORASIC 30 MG INJ#',
				'stock' => '367',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			963 =>
			array (
				'codename' => 'OBT00000349',
				'name' => 'LESICHOL 300 MG CAP',
				'stock' => '125',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			964 =>
			array (
				'codename' => 'OBT00000945',
				'name' => 'VALISANBE 2 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			965 =>
			array (
				'codename' => 'OBT00000944',
				'name' => 'DIAZEPAM 2 MG TAB (100s)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			966 =>
			array (
				'codename' => 'ALK00000519',
				'name' => 'STERISTRIP 1/2 X 4 R1547-3M',
				'stock' => '167',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			967 =>
			array (
				'codename' => 'BBK00000175',
				'name' => 'FLUOROCELL PLT (XN CD994563)',
				'stock' => '17600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			968 =>
			array (
				'codename' => 'ALK00000290',
				'name' => 'FLAT ROLL R45 (30CMX200M)',
				'stock' => '102',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			969 =>
			array (
				'codename' => 'OBT00000511',
				'name' => 'SIBELIUM 5 MG TABLET',
				'stock' => '87',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			970 =>
			array (
				'codename' => 'OBT00000084',
				'name' => 'BRICASMA 0,5 MG/ML INJ 1 ML',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			971 =>
			array (
				'codename' => 'BBK00000010',
				'name' => 'PATHFAST PIPETTE TIPS*',
				'stock' => '4620',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			972 =>
			array (
				'codename' => 'OBT00000943',
				'name' => 'VAKSIN BIO DT INJ 5 ML',
				'stock' => '1040',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			973 =>
			array (
				'codename' => 'OBT00000548',
				'name' => 'TORASIC 10 MG TAB',
				'stock' => '41',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			974 =>
			array (
				'codename' => 'OBT00000547',
				'name' => 'TOPLEXIL SYRUP 60 ML',
				'stock' => '477',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			975 =>
			array (
				'codename' => 'OBT00000942',
				'name' => 'VAKSIN BIO Td INJ 5 ML (MULTIDOSE)',
				'stock' => '294',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			976 =>
			array (
				'codename' => 'ALK00000061',
				'name' => 'BETAPLAST-N 20 X 20 CM',
				'stock' => '2860',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			977 =>
			array (
				'codename' => 'OBT00001078',
				'name' => 'IRBESARTAN 150 MG TAB',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			978 =>
			array (
				'codename' => 'OBT00000941',
				'name' => 'VAKSIN PPD 2 UT BIOFARMA',
				'stock' => '8778',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			979 =>
			array (
				'codename' => 'OBT00001341',
				'name' => 'ROSUVASTATIN 10 MG TABLET',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			980 =>
			array (
				'codename' => 'OBT00000545',
				'name' => 'THYRAX TABLET 0,1 MG#',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			981 =>
			array (
				'codename' => 'OBT00000940',
				'name' => 'VAKSIN DENGVAXIA PFS INJ 0,5 ML',
				'stock' => '10180',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			982 =>
			array (
				'codename' => 'OBT00000543',
				'name' => 'THIAMYCIN FORTE 250 MG/5ML SYR DS 60 ML',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			983 =>
			array (
				'codename' => 'ALK00000250',
				'name' => 'ETT PLAIN 5 (100-111-050) PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			984 =>
			array (
				'codename' => 'OBT00000262',
				'name' => 'FORTANEST 15 MG/3 ML INJEKSI /',
				'stock' => '428',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			985 =>
			array (
				'codename' => 'ALK00000282',
				'name' => 'FINGER PROSTHESIS/ JARI PALSU DARE ',
				'stock' => '88000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			986 =>
			array (
				'codename' => 'OBT00000496',
				'name' => 'SANADRYL EXP SYR 60 ML',
				'stock' => '106',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			987 =>
			array (
				'codename' => 'OBT00000542',
				'name' => 'THIAMYCIN 500 MG CAP',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			988 =>
			array (
				'codename' => 'OBT00000938',
				'name' => 'VAKSIN HEXAXIM PFS INJ 0,5 ML',
				'stock' => '6536',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			989 =>
			array (
				'codename' => 'ALK00000621',
				'name' => 'FILM DI-HL 26 X 36',
				'stock' => '337',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			990 =>
			array (
				'codename' => 'ALK00000515',
				'name' => 'STERIL GLOVE GAMMEX PF 7',
				'stock' => '226',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			991 =>
			array (
				'codename' => 'ALK00000731',
				'name' => 'LAPAROSCOPY SET HOGY USP 2129',
				'stock' => '9980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			992 =>
			array (
				'codename' => 'OBT00000541',
				'name' => 'TERFACEF 1 GRAM INJEKSI',
				'stock' => '2264',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			993 =>
			array (
				'codename' => 'BBK00000007',
				'name' => 'PATHFAST D-DIMER REAGEN KIT',
				'stock' => '1238',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			994 =>
			array (
				'codename' => 'OBT00000898',
				'name' => 'ICUNES 100 MCG/ML INJ 2 ML',
				'stock' => '4675',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			995 =>
			array (
				'codename' => 'OBT00001339',
				'name' => 'PRO TB 4 TABLET',
				'stock' => '54',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			996 =>
			array (
				'codename' => 'OBT00000535',
				'name' => 'TEBOKAN SPECIAL 80 MG TAB ',
				'stock' => '117',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			997 =>
			array (
				'codename' => 'ALK00000730',
				'name' => 'MANDRIN INTUBATING STYLET NO. 4',
				'stock' => '1485',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			998 =>
			array (
				'codename' => 'OBT00000339',
				'name' => 'KSR 600 MG TAB',
				'stock' => '32',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			999 =>
			array (
				'codename' => 'BBK00000164',
				'name' => 'CALIBRATOR PACK NOVA 5 (15648)',
				'stock' => '132000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1000 =>
			array (
				'codename' => 'OBT00000532',
				'name' => 'TAXEGRAM 1 GR INJ',
				'stock' => '1531',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1001 =>
			array (
				'codename' => 'OBT00000471',
				'name' => 'PROVERA 10 MG TAB',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1002 =>
			array (
				'codename' => 'OBT00000936',
				'name' => 'PROTAD INJ 3ML',
				'stock' => '11520',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1003 =>
			array (
				'codename' => 'ALK00000514',
				'name' => 'STERIL GLOVE GAMMEX PF 6,5',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1004 =>
			array (
				'codename' => 'OBT00000259',
				'name' => 'FLUIMUCIL GRANUL 200 MG',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1005 =>
			array (
				'codename' => 'BBK00000161',
				'name' => 'BLOOD AGAR BASE 500 GRAM (1108)',
				'stock' => '19250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1006 =>
			array (
				'codename' => 'OBT00001336',
				'name' => 'FOLAVIT 1000 MCG TAB',
				'stock' => '19',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1007 =>
			array (
				'codename' => 'OBT00000257',
				'name' => 'FLUIMUCIL 200 MG CAP',
				'stock' => '59',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1008 =>
			array (
				'codename' => 'OBT00000530',
				'name' => 'TARIVID OTIC 3 MG/ML DROP',
				'stock' => '850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1009 =>
			array (
				'codename' => 'ALK00000277',
				'name' => 'FEEDING TUBE FR-8 40CM TERUMO',
				'stock' => '424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1010 =>
			array (
				'codename' => 'OBT00000465',
				'name' => 'PROLIC 300MG CAPSUL',
				'stock' => '72',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1011 =>
			array (
				'codename' => 'OBT00000529',
				'name' => 'TARIVID 0,3% EYE DROP/SOLUTION#',
				'stock' => '641',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1012 =>
			array (
				'codename' => 'OBT00000934',
				'name' => 'VAKSIN FLUQUADRI INJS 0.25 ML PFS',
				'stock' => '1749',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1013 =>
			array (
				'codename' => 'OBT00000526',
				'name' => 'STUGERON 25 MG TAB',
				'stock' => '29',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1014 =>
			array (
				'codename' => 'OBT00000170',
				'name' => 'CRAVIT 0,5% EYE DROP 5 ML',
				'stock' => '1270',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1015 =>
			array (
				'codename' => 'OBT00000949',
				'name' => 'HISTOACRYL 0,5 ML INJ',
				'stock' => '5472',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1016 =>
			array (
				'codename' => 'OBT00000451',
				'name' => 'PHENYTOIN INJ 100 MG/2ML',
				'stock' => '532',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1017 =>
			array (
				'codename' => 'OBT00001335',
				'name' => 'SANTA E 400 MG TABLET',
				'stock' => '41',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1018 =>
			array (
				'codename' => 'OBT00000254',
				'name' => 'FLIXOTIDE NEBULISER',
				'stock' => '191',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1019 =>
			array (
				'codename' => 'OBT00000948',
				'name' => 'ETANYL 50 MCG INJ 2 ML',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1020 =>
			array (
				'codename' => 'OBT00000525',
				'name' => 'STREPTOMYCIN 1 GR INJ MEIJI',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1021 =>
			array (
				'codename' => 'OBT00000989',
				'name' => 'CENDO VITAL 10 TAB',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1022 =>
			array (
				'codename' => 'ALK00001524',
				'name' => 'SOFSILK 3-0 GS832',
				'stock' => '616',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1023 =>
			array (
				'codename' => 'OBT00000252',
				'name' => 'FLEET ENEMA',
				'stock' => '1072',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1024 =>
			array (
				'codename' => 'OBT00000169',
				'name' => 'CPG 75 MG TAB',
				'stock' => '126',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1025 =>
			array (
				'codename' => 'OBT00000524',
				'name' => 'STESOLID 5 MG/2,5 ML RECTAL TUBE#',
				'stock' => '261',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1026 =>
			array (
				'codename' => 'ALK00000233',
				'name' => 'ETHIBON EXCEL 3-0 X522H',
				'stock' => '1730',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1027 =>
			array (
				'codename' => 'ALK00000759',
				'name' => 'POUCHES STERICLIN FLAT 5CM/200M',
				'stock' => '5555',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1028 =>
			array (
				'codename' => 'ALK00000755',
				'name' => 'WRAPING P. AST 100 X 100 CM (PAPER GREEN)-(0205)',
				'stock' => '93',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1029 =>
			array (
				'codename' => 'ALK00000747',
				'name' => 'WRAPPING PAPER 2VPSWG010 100 X 100 (GREEN)',
				'stock' => '93',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1030 =>
			array (
				'codename' => 'BBK00000273',
				'name' => 'ASAM ASETAT 6%',
				'stock' => '858',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1031 =>
			array (
				'codename' => 'ALK00000732',
				'name' => 'VICRYL 2-0 (J317H)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1032 =>
			array (
				'codename' => 'ALK00000720',
				'name' => 'STRATAFIX 2-0 TAPER (SXPD2B419)',
				'stock' => '5984',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1033 =>
			array (
				'codename' => 'ALK00000704',
				'name' => 'SUCTION CONNECTING TUBE 3.0 FFM',
				'stock' => '398',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1034 =>
			array (
				'codename' => 'ALK00000671',
				'name' => 'VERBAN 4 X 10 CM DRC',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1035 =>
			array (
				'codename' => 'ALK00000512',
				'name' => 'STERIL GAMMEX MICRO-GRIP NO. 7.5 ANSELL NEW',
				'stock' => '289',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1036 =>
			array (
				'codename' => 'ALK00001681',
				'name' => 'MERSILK 4-0 TAPER POINT (W582)',
				'stock' => '735',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1037 =>
			array (
				'codename' => 'BBK00000155',
				'name' => 'AMILASE PANC (COBAS)',
				'stock' => '30440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1038 =>
			array (
				'codename' => 'ALK00001108',
				'name' => 'PROLENE 3-0 W8936T',
				'stock' => '1726',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1039 =>
			array (
				'codename' => 'BBK00000005',
				'name' => 'PATHFAST CK-MB REAGEN KIT',
				'stock' => '1238',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1040 =>
			array (
				'codename' => 'OBT00000068',
				'name' => 'BIO-ATP TAB',
				'stock' => '24',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1041 =>
			array (
				'codename' => 'OBT00001334',
				'name' => 'RIFAMTIBI 450 MG TABLET',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1042 =>
			array (
				'codename' => 'OBT00000521',
				'name' => 'STARXON INJ 1 GR',
				'stock' => '2470',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1043 =>
			array (
				'codename' => 'OBT00000438',
				'name' => 'NOVALGIN 1 GR /2 ML INJ',
				'stock' => '182',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1044 =>
			array (
				'codename' => 'OBT00000947',
				'name' => 'REMIKAF 2 MG INJ',
				'stock' => '1276',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1045 =>
			array (
				'codename' => 'ALK00000510',
				'name' => 'SPINOCAN NEEDLE 20 G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1046 =>
			array (
				'codename' => 'OBT00000931',
				'name' => 'OMEPRAZOLE 40 MG INJ',
				'stock' => '250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1047 =>
			array (
				'codename' => 'OBT00000336',
				'name' => 'KLODERMA 0,05% CREAM 10 GR',
				'stock' => '348',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1048 =>
			array (
				'codename' => 'BBK00000004',
				'name' => 'IRON GEN.2 (COBAS 3183696122)',
				'stock' => '7700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1049 =>
			array (
				'codename' => 'ALK00000994',
				'name' => 'LUMBAL SACRAL CORSET PRATAMA XL (95-105 CM)',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1050 =>
			array (
				'codename' => 'OBT00001332',
				'name' => 'JANUMET XR 50 MG/ 500 MG TABLET',
				'stock' => '175',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1051 =>
			array (
				'codename' => 'OBT00000930',
				'name' => 'EXTRACE 1000 MG INJ ',
				'stock' => '330',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1052 =>
			array (
				'codename' => 'OBT00000520',
				'name' => 'STABIXIN 1 GR INJ',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1053 =>
			array (
				'codename' => 'ALK00000274',
				'name' => 'FEEDING TUBE FR-5 100CM TERUMO',
				'stock' => '424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1054 =>
			array (
				'codename' => 'ALK00000509',
				'name' => 'SPALK TANGAN DEWASA 6 X 50 CM',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1055 =>
			array (
				'codename' => 'OBT00000226',
				'name' => 'ERICAF 1 MG TAB',
				'stock' => '62',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1056 =>
			array (
				'codename' => 'OBT00000161',
				'name' => 'CONCOR 1,25 MG TAB.',
				'stock' => '34',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1057 =>
			array (
				'codename' => 'ALK00000267',
				'name' => 'FACE MASK LARGE ADULT SIZE.6 (2602)',
				'stock' => '825',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1058 =>
			array (
				'codename' => 'ALK00001563',
				'name' => 'FLUORESCEIN SODIUM OPHTALMIC STRIP',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1059 =>
			array (
				'codename' => 'ALK00001559',
				'name' => 'AIR OPTIX AQUA (ALCON)',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1060 =>
			array (
				'codename' => 'ALK00001561',
				'name' => 'KERTAS SCHIMER TEAR TEST',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1061 =>
			array (
				'codename' => 'ALK00001558',
				'name' => 'SURGIPRO 3-0 CUTTING (SP665)',
				'stock' => '1177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1062 =>
			array (
				'codename' => 'ALK00001557',
				'name' => 'SOFSILK 2-0 CUTTING (SS679)',
				'stock' => '759',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1063 =>
			array (
				'codename' => 'ALK00001556',
				'name' => 'SOFSILK 0 TAPPER (424H)',
				'stock' => '638',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1064 =>
			array (
				'codename' => 'OBT00000929',
				'name' => 'TETAGAM PREFILLED SYRINGE INJ 1ML(250IU)',
				'stock' => '2000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1065 =>
			array (
				'codename' => 'OBT00000518',
				'name' => 'SOMATOSTATIN 3 MG INJ',
				'stock' => '8140',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1066 =>
			array (
				'codename' => 'OBT00001331',
				'name' => 'JANUMET XR 50 MG/ 1000 MG TABLET',
				'stock' => '175',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1067 =>
			array (
				'codename' => 'OBT00000427',
				'name' => 'NEULIN 1 GR INJ#',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1068 =>
			array (
				'codename' => 'OBT00000241',
				'name' => 'FARSIX 10 MG/ML INJ 2 ML#',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1069 =>
			array (
				'codename' => 'OBT00000155',
				'name' => 'CODIPRONT SYR',
				'stock' => '563',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1070 =>
			array (
				'codename' => 'OBT00000148',
				'name' => 'CLINOLEIC 20% INF 100 ML ',
				'stock' => '2365',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1071 =>
			array (
				'codename' => 'OBT00001220',
				'name' => 'AMINOSTERIL INFANT 6% INFUS 100ML',
				'stock' => '852',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1072 =>
			array (
				'codename' => 'OBT00001214',
				'name' => 'NYMIKO SUSP 12 ML DROP',
				'stock' => '329',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1073 =>
			array (
				'codename' => 'OBT00001212',
				'name' => 'BENOSON N CREAM 15 GRAM',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1074 =>
			array (
				'codename' => 'OBT00001211',
				'name' => 'BENOSON N CREAM  5 GRAM',
				'stock' => '185',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1075 =>
			array (
				'codename' => 'OBT00001210',
				'name' => 'BENOSON CREAM 15 GR',
				'stock' => '320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1076 =>
			array (
				'codename' => 'OBT00001204',
				'name' => 'SANEXON 16 MG TAB',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1077 =>
			array (
				'codename' => 'OBT00000927',
				'name' => 'KY JELLY 100 GR#',
				'stock' => '620',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1078 =>
			array (
				'codename' => 'OBT00000516',
				'name' => 'SMECTA SACHET 3 GRAM',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1079 =>
			array (
				'codename' => 'ALK00001065',
				'name' => 'NEONATAL MASK 50 MM RD 805',
				'stock' => '1815',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1080 =>
			array (
				'codename' => 'ALK00000508',
				'name' => 'SPALK KAKI DEWASA 8 X 90 CM',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1081 =>
			array (
				'codename' => 'OBT00000512',
				'name' => 'SIFROL 0,125 MG TAB#',
				'stock' => '90',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1082 =>
			array (
				'codename' => 'ALK00000222',
				'name' => 'ENDOSCOPIC CURVED INTRALUMINAL STAPLER 33 MM (ECS33A)',
				'stock' => '79200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1083 =>
			array (
				'codename' => 'ALK00001056',
				'name' => 'NELATON CATH CH 12 RUSCH',
				'stock' => '79',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1084 =>
			array (
				'codename' => 'ALK00000507',
				'name' => 'SPALK 5 X 20 CM TANGAN ANAK',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1085 =>
			array (
				'codename' => 'OBT00000926',
				'name' => 'GRANON 3 MG INJ',
				'stock' => '1270',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1086 =>
			array (
				'codename' => 'ALK00000729',
				'name' => 'TERUMO MEDICEF LANCET FOR FINE TOUCH',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1087 =>
			array (
				'codename' => 'BBK00000002',
				'name' => 'BM LACTATE (3012654016)',
				'stock' => '5324',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1088 =>
			array (
				'codename' => 'OBT00000506',
				'name' => 'SEQUEST 4 GR SACHET',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1089 =>
			array (
				'codename' => 'OBT00000505',
				'name' => 'SANTIBI PLUS TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1090 =>
			array (
				'codename' => 'OBT00001330',
				'name' => 'JANUMET XR 100 MG/ 1000 MG TABLET',
				'stock' => '175',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1091 =>
			array (
				'codename' => 'ALK00000506',
				'name' => 'SPALK 5 X 15 CM TANGAN ANAK',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1092 =>
			array (
				'codename' => 'OBT00000924',
				'name' => 'ZITHRAX 500 MG TAB',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1093 =>
			array (
				'codename' => 'OBT00000504',
				'name' => 'SANTIBI 500MG TABLET',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1094 =>
			array (
				'codename' => 'OBT00000335',
				'name' => 'KETOSTERIL TAB',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1095 =>
			array (
				'codename' => 'ALK00000264',
				'name' => 'EXTERNAL DRAINAGE SMALL',
				'stock' => '37950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1096 =>
			array (
				'codename' => 'OBT00000501',
				'name' => 'SANPRIMA (200 MG,40 MG)/ 5 ML SYR 60 ML',
				'stock' => '266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1097 =>
			array (
				'codename' => 'ALK00000725',
				'name' => 'SURFANIOS PREMIUM 1L',
				'stock' => '12977',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1098 =>
			array (
				'codename' => 'OBT00000413',
				'name' => 'NACL 3% INFUS 500 CC ',
				'stock' => '303',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1099 =>
			array (
				'codename' => 'ALK00000724',
				'name' => 'DERMANIOS SCRUB 500 ML',
				'stock' => '1375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1100 =>
			array (
				'codename' => 'OBT00000410',
				'name' => 'NACL 0,9% INFUS 500 CC OTSUKA',
				'stock' => '148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1101 =>
			array (
				'codename' => 'OBT00001329',
				'name' => 'GLUKOLOS TABLET',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1102 =>
			array (
				'codename' => 'OBT00000237',
				'name' => 'FAKTU SUPPOSITORIA',
				'stock' => '80',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1103 =>
			array (
				'codename' => 'ALK00000505',
				'name' => 'SPALK 5 X 12 CM TANGAN ANAK',
				'stock' => '66',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1104 =>
			array (
				'codename' => 'OBT00000235',
				'name' => 'EZYGARD FORTE FC CAPLET',
				'stock' => '56',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1105 =>
			array (
				'codename' => 'OBT00000233',
				'name' => 'EXFORGE 5 MG/80 MG TAB',
				'stock' => '139',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1106 =>
			array (
				'codename' => 'OBT00001191',
				'name' => 'MELANOX ES CREAM 15 GR  ',
				'stock' => '659',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1107 =>
			array (
				'codename' => 'OBT00000923',
				'name' => 'VAKSIN HAVRIX 720 JUNIOR INJEKSI',
				'stock' => '2848',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1108 =>
			array (
				'codename' => 'ALK00001019',
				'name' => 'MONOCRYL 3-0 Y427H',
				'stock' => '1402',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1109 =>
			array (
				'codename' => 'ALK00000504',
				'name' => 'SPALK 5 X 10 CM TANGAN BAYI',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1110 =>
			array (
				'codename' => 'ALK00000259',
				'name' => 'EXTENSION TUBE 150CM BLACK (8723010)',
				'stock' => '748',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1111 =>
			array (
				'codename' => 'ALK00000258',
				'name' => 'ETT PROF CLEAR 8 (100-199-080)',
				'stock' => '993',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1112 =>
			array (
				'codename' => 'BBK00000272',
				'name' => 'LIQUOR CARBONAS DETERGENT 100 ML',
				'stock' => '63',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1113 =>
			array (
				'codename' => 'OBT00000498',
				'name' => 'SANEXON 125 MG INJ',
				'stock' => '958',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1114 =>
			array (
				'codename' => 'BBK00000270',
				'name' => 'POT CREAM COSMETIC 15 GR',
				'stock' => '32',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1115 =>
			array (
				'codename' => 'OBT00000497',
				'name' => 'SANAZET 500 MG TAB / PYRAZINAMIDE',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1116 =>
			array (
				'codename' => 'BBK00000269',
				'name' => 'POT CREAM COSMETIC 5 GR',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1117 =>
			array (
				'codename' => 'ALK00000219',
				'name' => 'ENDO-FLEX BILLIARY STENT PIGTAIL 9 FR-12 CM(PE2031009F-2F)',
				'stock' => '8250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1118 =>
			array (
				'codename' => 'BBK00000268',
				'name' => 'CACO3 POWDER',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1119 =>
			array (
				'codename' => 'OBT00000495',
				'name' => 'SANADRYL DMP SYR 60 ML',
				'stock' => '122',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1120 =>
			array (
				'codename' => 'OBT00000401',
				'name' => 'MUCOPECT PEDIATRIC ELIXIR 60ML',
				'stock' => '518',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1121 =>
			array (
				'codename' => 'OBT00000493',
				'name' => 'SALOFALK 250 MG TAB#',
				'stock' => '78',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1122 =>
			array (
				'codename' => 'OBT00000398',
				'name' => 'MUCOPECT 30 MG TAB#',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1123 =>
			array (
				'codename' => 'ALK00000088',
				'name' => 'HYPAVIX 5CM X 5M',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1124 =>
			array (
				'codename' => 'BBK00000267',
				'name' => 'NACL POWDER',
				'stock' => '462',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1125 =>
			array (
				'codename' => 'A051',
				'name' => 'XILON TAB 4 MG ',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1126 =>
			array (
				'codename' => 'OBT00001152',
				'name' => 'RISPERIDONE 2 MG TAB',
				'stock' => '1188',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1127 =>
			array (
				'codename' => 'OBT00001201',
				'name' => 'TRIPTAGIC 100 MG TAB',
				'stock' => '516',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1128 =>
			array (
				'codename' => 'A070',
				'name' => 'ANADIUM TAB',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1129 =>
			array (
				'codename' => 'OBT00001150',
				'name' => 'ZOFREDAL 1 MG TAB',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1130 =>
			array (
				'codename' => 'OBT00001149',
				'name' => 'MYCO Z OINTMENT 10 GR',
				'stock' => '742',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1131 =>
			array (
				'codename' => 'OBT00001147',
				'name' => 'PROTERINE 20 MG TAB',
				'stock' => '1485',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1132 =>
			array (
				'codename' => 'ALK00001554',
				'name' => 'DELTA-CAST PRINTS 3 INCI (72273.06)',
				'stock' => '1903',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1133 =>
			array (
				'codename' => 'OBT00001146',
				'name' => 'PROTERINE 5 MG/ML INJ 2 ML',
				'stock' => '272',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1134 =>
			array (
				'codename' => 'ALK00000721',
				'name' => 'POLIVICRYL 4-0 TAPER (J310H)',
				'stock' => '1135',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1135 =>
			array (
				'codename' => 'OBT00000396',
				'name' => 'MOVICOX 15 MG TAB',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1136 =>
			array (
				'codename' => 'A069',
				'name' => 'ALLORIS TAB 10 MG',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1137 =>
			array (
				'codename' => 'OBT00001350',
				'name' => 'ACETRAM FILM-COATED TABLET',
				'stock' => '690',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1138 =>
			array (
				'codename' => 'A027',
				'name' => 'Glucovance',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1139 =>
			array (
				'codename' => 'OBT00000490',
				'name' => 'ROCULAX 10MG/ML INJ 5 ML',
				'stock' => '1120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1140 =>
			array (
				'codename' => 'A2791',
				'name' => 'PROVE D3 DROP',
				'stock' => '2000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1141 =>
			array (
				'codename' => 'OBT00001338',
				'name' => 'CAIRAN BSS 25 ML',
				'stock' => '1600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1142 =>
			array (
				'codename' => 'OBT00001346',
				'name' => 'OTILON EAR DROP',
				'stock' => '386',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1143 =>
			array (
				'codename' => 'OBT00001345',
				'name' => 'AKILEN EAR DROP',
				'stock' => '607',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1144 =>
			array (
				'codename' => 'CGN00000054',
				'name' => 'ABBOTIC XL TAB - 2',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1145 =>
			array (
				'codename' => 'OBT00001144',
				'name' => 'DOXORUBICIN 10 MG INJ  ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1146 =>
			array (
				'codename' => 'CGN00000038',
				'name' => 'KN-3.5 CLAVICLE RC LOCKING PLATE (S)8H,Ti L (245.1150830.15)',
				'stock' => '41250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1147 =>
			array (
				'codename' => 'A081',
				'name' => 'Obat Test Adjustment - Max',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1148 =>
			array (
				'codename' => 'ALK00001518',
				'name' => 'GYPSONA 10 X 2,7 / 4 INC',
				'stock' => '412',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1149 =>
			array (
				'codename' => 'OBT00001139',
				'name' => 'ACYCLOVIR 200 MG TAB',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1150 =>
			array (
				'codename' => 'ALK00001526',
				'name' => 'ULTRASONIC GEL ONEMED 250ML',
				'stock' => '223',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1151 =>
			array (
				'codename' => 'ALK00001528',
				'name' => 'ROLL TAMPON 1 CM X-RAY',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1152 =>
			array (
				'codename' => 'ALK00001505',
				'name' => 'OPSITE POST OP 15.5 X 8.5 CM',
				'stock' => '253',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1153 =>
			array (
				'codename' => 'OBT00000486',
				'name' => 'RILLUS TAB',
				'stock' => '72',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1154 =>
			array (
				'codename' => 'ALK00000370',
				'name' => 'HSG CATHETER SET (7 F SUREFLEX)',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1155 =>
			array (
				'codename' => 'OBT00000232',
				'name' => 'EXFORGE 5 MG/160 MG TAB#',
				'stock' => '162',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1156 =>
			array (
				'codename' => 'OBT00000147',
				'name' => 'CLINIMIX N9G20E INFUS 1 LITER',
				'stock' => '4400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1157 =>
			array (
				'codename' => 'ALK00000368',
				'name' => 'HORIZON CLIP ML- 3200 ',
				'stock' => '455',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1158 =>
			array (
				'codename' => 'A2912',
				'name' => 'Obat Neng KLMNO',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1159 =>
			array (
				'codename' => 'A2932',
				'name' => 'DACTINOMYCIN 0,5MG',
				'stock' => '4000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1160 =>
			array (
				'codename' => 'A2910',
				'name' => 'Obat Neng ABCDE',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1161 =>
			array (
				'codename' => 'A2905',
				'name' => 'ANTIMO TAB',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1162 =>
			array (
				'codename' => 'OBT00001323',
				'name' => 'ANPIRIDE 2 MG TABLET',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1163 =>
			array (
				'codename' => 'A2920',
				'name' => 'Bodrexin',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1164 =>
			array (
				'codename' => 'A2928',
				'name' => 'Selang Infus',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1165 =>
			array (
				'codename' => 'A2904',
				'name' => 'ALOVELL TAB',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1166 =>
			array (
				'codename' => 'A2913',
				'name' => 'Obat Expired ABC',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1167 =>
			array (
				'codename' => 'OBT00001318',
				'name' => 'ETORVEL 90 MG TABLET',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1168 =>
			array (
				'codename' => 'A2952',
				'name' => 'Obat Oral DEF',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1169 =>
			array (
				'codename' => 'ALK00000367',
				'name' => 'HORIZON CLIP M-2200 NEW',
				'stock' => '253',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1170 =>
			array (
				'codename' => 'A041',
				'name' => 'Vitamin C',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1171 =>
			array (
				'codename' => 'A2956',
				'name' => 'Obat Non Oral GHI',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1172 =>
			array (
				'codename' => 'A043',
				'name' => 'Ketorolac',
				'stock' => '800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1173 =>
			array (
				'codename' => 'A046',
				'name' => 'Alprazolam',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1174 =>
			array (
				'codename' => 'ALK00000719',
				'name' => 'CHROMIC 2-0 TAPER (913H)',
				'stock' => '1200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1175 =>
			array (
				'codename' => 'ALK00000215',
				'name' => 'ELASTOMULL 8CM X 4 M',
				'stock' => '407',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1176 =>
			array (
				'codename' => 'OBT00000485',
				'name' => 'RIKLONA 2 MG TAB',
				'stock' => '70',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1177 =>
			array (
				'codename' => 'OBT00000390',
				'name' => 'MIKASIN 500 MG INJ',
				'stock' => '1815',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1178 =>
			array (
				'codename' => 'ALK00000365',
				'name' => 'HOMER BREAST LOCALIZATION NEEDLE 20 GA X 7.5CM',
				'stock' => '8250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1179 =>
			array (
				'codename' => 'ALK00000718',
				'name' => 'CHROMIC GUT 2-0 TAPER (G164T)',
				'stock' => '792',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1180 =>
			array (
				'codename' => 'OBT00001317',
				'name' => 'ETORVEL 60 MG TABLET',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1181 =>
			array (
				'codename' => 'OBT00000230',
				'name' => 'ESILGAN 2 MG TAB',
				'stock' => '61',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1182 =>
			array (
				'codename' => 'OBT00001034',
				'name' => 'PARATUSIN SYR',
				'stock' => '260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1183 =>
			array (
				'codename' => 'OBT00000481',
				'name' => 'RECOLFAR 0,5 MG TABLET',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1184 =>
			array (
				'codename' => 'OBT00000049',
				'name' => 'ATIVAN 2 MG TAB',
				'stock' => '58',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1185 =>
			array (
				'codename' => 'OBT00000146',
				'name' => 'CLINIMIX N9G15E INFUS 1 LITER',
				'stock' => '4235',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1186 =>
			array (
				'codename' => 'BBK00000121',
				'name' => 'TAMPONI SECCHI/SWAB COTTON WODDEN (26060)*',
				'stock' => '57',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1187 =>
			array (
				'codename' => 'ALK00000213',
				'name' => 'ELASTIS BANDAGE 12 CM X 5 M (PRODEVICE-24011)',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1188 =>
			array (
				'codename' => 'ALK00000717',
				'name' => 'VICRYL 1-0 TAPER (J359H)',
				'stock' => '1342',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1189 =>
			array (
				'codename' => 'ALK00000716',
				'name' => 'PROLENE 5-0 CUTTING (8661G)',
				'stock' => '1433',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1190 =>
			array (
				'codename' => 'ALK00000364',
				'name' => 'HOMER BREAST LOCALIZATION NEEDLE 20 GA X 5CM',
				'stock' => '8250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1191 =>
			array (
				'codename' => 'OBT00000229',
				'name' => 'ESILGAN 1 MG TAB',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1192 =>
			array (
				'codename' => 'OBT00000477',
				'name' => 'PUMPITOR 40 MG INJ',
				'stock' => '1609',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1193 =>
			array (
				'codename' => 'OBT00000228',
				'name' => 'ESFOLAT TAB',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1194 =>
			array (
				'codename' => 'ALK00000582',
				'name' => 'VERBAN 4 X 5 CM DRC',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1195 =>
			array (
				'codename' => 'ALK00000713',
				'name' => 'INFUS SET ADULT SOL. ADM SET TERUMO (TI*300WI)',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1196 =>
			array (
				'codename' => 'OBT00000227',
				'name' => 'ERYSANBE 500 MG TAB#',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1197 =>
			array (
				'codename' => 'OBT00001053',
				'name' => 'ENICO CAP',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1198 =>
			array (
				'codename' => 'ALK00000210',
				'name' => 'ECHOTIP ULTRA HD ULTRASOUND ACCESS NEEDLE 19 G(ECHO-HD-19-A)',
				'stock' => '63690',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1199 =>
			array (
				'codename' => 'ALK00000501',
				'name' => 'SOFT SIMPLASTIK FOLEY 3 WAY 24 RUSCH (664130)',
				'stock' => '1700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1200 =>
			array (
				'codename' => 'ALK00000712',
				'name' => 'INFUS SET PAED. SOL. ADM SET TERUMO (TK*300WI)',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1201 =>
			array (
				'codename' => 'OBT00000463',
				'name' => 'PROFILAS 0,2 MG/ML SYR 60 ML',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1202 =>
			array (
				'codename' => 'ALK00000710',
				'name' => 'MASKER EAR LOOP MEDITECH',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1203 =>
			array (
				'codename' => 'ALK00000209',
				'name' => 'ECHOTIP PROCORE HD  BIOPSY NEEDLE 19 G-4.8FR(ECHO-HD-19-C)',
				'stock' => '94380',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1204 =>
			array (
				'codename' => 'OBT00000462',
				'name' => 'PROFERTIL 50 MG TABLET',
				'stock' => '170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1205 =>
			array (
				'codename' => 'ALK00000252',
				'name' => 'ETT PORTEX SACETT NO. 7.5 (REF. 100/189/075)',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1206 =>
			array (
				'codename' => 'OBT00000375',
				'name' => 'MEDERMA GEL 20 GR',
				'stock' => '1870',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1207 =>
			array (
				'codename' => 'OBT00000328',
				'name' => 'KALNEX 500MG TAB',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1208 =>
			array (
				'codename' => 'OBT00000221',
				'name' => 'ECRON 10 MG INJ',
				'stock' => '2310',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1209 =>
			array (
				'codename' => 'OBT00001314',
				'name' => 'NOVEXIB 100 MG KAPSUL',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1210 =>
			array (
				'codename' => 'OBT00000134',
				'name' => 'CHLORAMFECORT CREAM 10 GRAM',
				'stock' => '147',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1211 =>
			array (
				'codename' => 'OBT00000459',
				'name' => 'PRIMPERAN 10 MG/2 ML INJ',
				'stock' => '103',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1212 =>
			array (
				'codename' => 'ALK00000249',
				'name' => 'ETT PLAIN 4,5 (100-111-045) PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1213 =>
			array (
				'codename' => 'BBK00000259',
				'name' => 'KAPSUL KOSONG OO',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1214 =>
			array (
				'codename' => 'OBT00000457',
				'name' => 'PREMASTON 5 MG TABLET',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1215 =>
			array (
				'codename' => 'ALK00000500',
				'name' => 'SOFSILK 2-0 SS685',
				'stock' => '748',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1216 =>
			array (
				'codename' => 'OBT00000213',
				'name' => 'DOLO NEUROBION CAPLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1217 =>
			array (
				'codename' => 'OBT00000448',
				'name' => 'PELASTIN 1 GR INJ',
				'stock' => '4790',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1218 =>
			array (
				'codename' => 'ALK00000362',
				'name' => 'HIWIRE HYDROPHILIC WIRE GUIDE, 0.025 260CM(HWA-25-260)',
				'stock' => '21450',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1219 =>
			array (
				'codename' => 'ALK00000709',
				'name' => 'CLIP STATUS PATIENT - RED',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1220 =>
			array (
				'codename' => 'OBT00000447',
				'name' => 'PARIET 20 MG TAB',
				'stock' => '205',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1221 =>
			array (
				'codename' => 'ALK00000708',
				'name' => 'CLIP STATUS PATIENT - YELLOW',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1222 =>
			array (
				'codename' => 'OBT00000445',
				'name' => 'PANTOZOL 40 MG TAB',
				'stock' => '172',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1223 =>
			array (
				'codename' => 'ALK00000996',
				'name' => 'LUMBAL SACRAL CORSET PRATAMA XXXL (115-125 CM)',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1224 =>
			array (
				'codename' => 'ALK00000707',
				'name' => 'CLIP STATUS PATIENT - PURPLE',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1225 =>
			array (
				'codename' => 'OBT00000444',
				'name' => 'OTOPAIN EAR DROP 8 ML',
				'stock' => '725',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1226 =>
			array (
				'codename' => 'ALK00000498',
				'name' => 'SKIN STAPLER J&J PMW 35 WIDE NEW (PMW35)',
				'stock' => '94',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1227 =>
			array (
				'codename' => 'OBT00000034',
				'name' => 'APOLAR N CREAM 10 GR',
				'stock' => '393',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1228 =>
			array (
				'codename' => 'OBT00001319',
				'name' => 'ALBUMINAR 25% INF 100 ML',
				'stock' => '18500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1229 =>
			array (
				'codename' => 'ALK00000995',
				'name' => 'LUMBAL SACRAL CORSET PRATAMA XXL (105-115 CM)',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1230 =>
			array (
				'codename' => 'ALK00000722',
				'name' => 'SURGICAL CLIPPER BLADE',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1231 =>
			array (
				'codename' => 'OBT00001326',
				'name' => 'FORBETES 500 MG TABLET',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1232 =>
			array (
				'codename' => 'ALK00000497',
				'name' => 'SKIN STAPLE EXTRACTOR (PSX)',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1233 =>
			array (
				'codename' => 'ALK00001679',
				'name' => 'MICRO CUVETTE SEGMENT (168X10)',
				'stock' => '25980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1234 =>
			array (
				'codename' => 'OBT00000333',
				'name' => 'KETESSE 25 MG TAB',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1235 =>
			array (
				'codename' => 'OBT00000219',
				'name' => 'DUVADILAN 20 MG TAB',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1236 =>
			array (
				'codename' => 'ALK00000705',
				'name' => 'SUCTION CONNECTING TUBE 3 M (NCS-018)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1237 =>
			array (
				'codename' => 'OBT00000332',
				'name' => 'KENACORT A 0,1% CREAM 10 GRAM#',
				'stock' => '786',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1238 =>
			array (
				'codename' => 'ALK00000361',
				'name' => 'HI-LINE XS ROSEN BURR II D6.0MM (GE509R) NEW',
				'stock' => '45100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1239 =>
			array (
				'codename' => 'OBT00000218',
				'name' => 'DUVADILAN 10 MG/2 ML INJ',
				'stock' => '284',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1240 =>
			array (
				'codename' => 'ALK00001531',
				'name' => 'KAPAS LIDI UKURAN S',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1241 =>
			array (
				'codename' => 'OBT00001313',
				'name' => 'GRANOVELL 3 MG INJEKSI',
				'stock' => '1000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1242 =>
			array (
				'codename' => 'ALK00000360',
				'name' => 'HI-LINE XS DIAMOND BURR III D6.0MM (GE619R)',
				'stock' => '42620',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1243 =>
			array (
				'codename' => 'ALK00001527',
				'name' => 'HSG CATHETER SET 5 FR',
				'stock' => '3476',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1244 =>
			array (
				'codename' => 'OBT00000216',
				'name' => 'DUPHASTON 10 MG TAB',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1245 =>
			array (
				'codename' => 'ALK00000993',
				'name' => 'LUMBAL SACRAL CORSET PRATAMA MEDIUM (75-85 CM)',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1246 =>
			array (
				'codename' => 'ALK00000495',
				'name' => 'SILKAM 3-0 HR26',
				'stock' => '788',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1247 =>
			array (
				'codename' => 'OBT00000324',
				'name' => 'KAEN MG3 INFUS 500 ML',
				'stock' => '266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1248 =>
			array (
				'codename' => 'OBT00000922',
				'name' => 'SUSU FRISOLAC GOLD 1 400 GR',
				'stock' => '1984',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1249 =>
			array (
				'codename' => 'OBT00000443',
				'name' => 'OSTEOCARE TAB',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1250 =>
			array (
				'codename' => 'OBT00001312',
				'name' => 'GRANOVELL 1 MG INJEKSI',
				'stock' => '420',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1251 =>
			array (
				'codename' => 'ALK00000494',
				'name' => 'SILKAM 3-0 HR22',
				'stock' => '936',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1252 =>
			array (
				'codename' => 'OBT00000325',
				'name' => 'KALBAMIN 10% INFUS 500 ML',
				'stock' => '1062',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1253 =>
			array (
				'codename' => 'OBT00001067',
				'name' => 'ELKANA TAB',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1254 =>
			array (
				'codename' => 'ALK00000493',
				'name' => 'SILKAM 2-0  13 X 60 CM (C0263869)',
				'stock' => '723',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1255 =>
			array (
				'codename' => 'ALK00000235',
				'name' => 'ETHILON 6-0 W1610T BLACK',
				'stock' => '1152',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1256 =>
			array (
				'codename' => 'ALK00001680',
				'name' => 'MERSILK 4-0 (W501)',
				'stock' => '384',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1257 =>
			array (
				'codename' => 'ALK00001678',
				'name' => 'TEGADERM CHG 1657R',
				'stock' => '800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1258 =>
			array (
				'codename' => 'OBT00000214',
				'name' => 'DOPAMET 250 MG TAB#',
				'stock' => '21',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1259 =>
			array (
				'codename' => 'OBT00001351',
				'name' => 'ZALDIAR TABLET',
				'stock' => '1080',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1260 =>
			array (
				'codename' => 'OBT00001340-1',
				'name' => 'VITAMIN B COMPLEX TABLET',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1261 =>
			array (
				'codename' => 'BBK00000306',
				'name' => 'STEROP (METHYLENE BLUE INJ 1% 5 ML) INJEKSI',
				'stock' => '900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1262 =>
			array (
				'codename' => 'OBT00000440',
				'name' => 'NOVORAPID FLEXPEN 100 UI/ML INJ 3 ML',
				'stock' => '1669',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1263 =>
			array (
				'codename' => 'OBT00000920',
				'name' => 'COLLACURE 50 MM X 50 MM',
				'stock' => '3438',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1264 =>
			array (
				'codename' => 'OBT00000919',
				'name' => 'COLLACURE 120 MM X 40 MM',
				'stock' => '6374',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1265 =>
			array (
				'codename' => 'OBT00000319',
				'name' => 'JANUMET 50 MG/500 MG TAB#',
				'stock' => '81',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1266 =>
			array (
				'codename' => 'ALK00000359',
				'name' => 'HI-LINE XS DIAMOND BURR III D5.0 MM (GE618R) NEW',
				'stock' => '47355',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1267 =>
			array (
				'codename' => 'A066',
				'name' => 'ALGANAX TAB 1 MG',
				'stock' => '51',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1268 =>
			array (
				'codename' => 'A077',
				'name' => 'DECULIN TAB 30 MG',
				'stock' => '118',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1269 =>
			array (
				'codename' => 'A5920',
				'name' => 'TOLAK ANGIN',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1270 =>
			array (
				'codename' => 'OBT00000212',
				'name' => 'DIVASK 5 MG TAB',
				'stock' => '46',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1271 =>
			array (
				'codename' => 'A5919',
				'name' => 'ANTANGIN',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1272 =>
			array (
				'codename' => 'A050',
				'name' => 'ZISTIC TAB 500 MG',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1273 =>
			array (
				'codename' => 'ALK00000703',
				'name' => 'COVERALL SPUNBUND 75 GSM',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1274 =>
			array (
				'codename' => 'OBT00000317',
				'name' => 'IVANES 1000 MG/ 10 ML INJ ',
				'stock' => '1980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1275 =>
			array (
				'codename' => 'OBT00000130',
				'name' => 'CENDO VITROLENTA EYE DROP 5 ML',
				'stock' => '360',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1276 =>
			array (
				'codename' => 'ALK00000841',
				'name' => 'LIGACLIP APPLIER MEDIUM LARGE (EL5ML)',
				'stock' => '40050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1277 =>
			array (
				'codename' => 'A052',
				'name' => 'BISOLVON TAB 8 MG',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1278 =>
			array (
				'codename' => 'ALK00000492',
				'name' => 'SILKAM 2/0 HR 26',
				'stock' => '711',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1279 =>
			array (
				'codename' => 'OBT00000027',
				'name' => 'AMOXSAN 500 MG CAP',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1280 =>
			array (
				'codename' => 'ALK00000701',
				'name' => 'SEPATU BOOT ',
				'stock' => '1375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1281 =>
			array (
				'codename' => 'ALK00000049',
				'name' => 'ASKINA SOFT CLEAR 9 X 30',
				'stock' => '477',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1282 =>
			array (
				'codename' => 'OBT00000436',
				'name' => 'NORVASK 10 MG TAB',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1283 =>
			array (
				'codename' => 'OBT00000435',
				'name' => 'NOROID DERMA RASH CREAM 60 ML ',
				'stock' => '1430',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1284 =>
			array (
				'codename' => 'ALK00000201',
				'name' => 'DYNACAST PRELUDE 5INCHI (12,5 CM X 4,6 M ) *',
				'stock' => '53',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1285 =>
			array (
				'codename' => 'OBT00000434',
				'name' => 'NEXIUM 40 MG TAB',
				'stock' => '292',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1286 =>
			array (
				'codename' => 'ALK00000830',
				'name' => 'JACKSON REES CIRCUIT 0,5 LITER (6418)/(2122)',
				'stock' => '6160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1287 =>
			array (
				'codename' => 'ALK00000700',
				'name' => 'RAPID TEST VIVADIAG IgG/IgM COVID-19',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1288 =>
			array (
				'codename' => 'ALK00000699',
				'name' => 'COVERALL LEVEL 3 WITH BLUE STRIPES GLOMEDA XL',
				'stock' => '3465',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1289 =>
			array (
				'codename' => 'OBT00000433',
				'name' => 'NEXIUM 40 MG INJ',
				'stock' => '2051',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1290 =>
			array (
				'codename' => 'BBK00000305',
				'name' => 'METHYLENE BLUE STERIL (MEDEBLUE)',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1291 =>
			array (
				'codename' => 'OBT00001027',
				'name' => 'AMIODARON 50 MG/ML INJ 3 ML  ',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1292 =>
			array (
				'codename' => 'ALK00000698',
				'name' => 'COVERALL LEVEL 3 WITH BLUE STRIPES GLOMEDA L',
				'stock' => '3465',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1293 =>
			array (
				'codename' => 'ALK00000247',
				'name' => 'ETT PLAIN 3,5 (100-111-035) PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1294 =>
			array (
				'codename' => 'ALK00000697',
				'name' => 'FACE MASK NO.3 (TODDLER)',
				'stock' => '1400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1295 =>
			array (
				'codename' => 'ALK00000490',
				'name' => 'SILKAM 0 DS 30',
				'stock' => '1106',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1296 =>
			array (
				'codename' => 'OBT00000023',
				'name' => 'AMINOFUSIN HEPAR INFUS 500 ML',
				'stock' => '2255',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1297 =>
			array (
				'codename' => 'OBT00000282',
				'name' => 'GRANON 1 MG INJ',
				'stock' => '600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1298 =>
			array (
				'codename' => 'ALK00000696',
				'name' => 'FACE MASK NO.2 (INFANT)',
				'stock' => '913',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1299 =>
			array (
				'codename' => 'ALK00000695',
				'name' => 'FACE MASK NO.1 (NEONATE)',
				'stock' => '913',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1300 =>
			array (
				'codename' => 'ALK00000046',
				'name' => 'ASKINA SOFT CLEAR 9 X 10',
				'stock' => '161',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1301 =>
			array (
				'codename' => 'OBT00000432',
				'name' => 'NEXIUM 20 MG TAB',
				'stock' => '183',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1302 =>
			array (
				'codename' => 'OBT00001321',
				'name' => 'ENERVON C TAB (100s)',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1303 =>
			array (
				'codename' => 'ALK00000489',
				'name' => 'SENSI MAXTER EXAM (XS) ONEMED - NON STERIL',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1304 =>
			array (
				'codename' => 'OBT00000279',
				'name' => 'GLUCOSAMINE 500 MG TAB (100 s)',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1305 =>
			array (
				'codename' => 'OBT00000127',
				'name' => 'CENDO STATROL EYE DROP 5 ML',
				'stock' => '201',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1306 =>
			array (
				'codename' => 'OBT00000275',
				'name' => 'GLUCOPHAGE 850 MG TAB',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1307 =>
			array (
				'codename' => 'OBT00000211',
				'name' => 'DIVASK 10 MG TAB',
				'stock' => '116',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1308 =>
			array (
				'codename' => 'ALK00000694',
				'name' => 'CERTOFIX PROTECT TRIO V 720 (4163214P)',
				'stock' => '12650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1309 =>
			array (
				'codename' => 'OBT00000311',
				'name' => 'INVICLOT 5000IU INJ *',
				'stock' => '658',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1310 =>
			array (
				'codename' => 'OBT00000918',
				'name' => 'SPINOCAN NEEDLE 26G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1311 =>
			array (
				'codename' => 'OBT00000312',
				'name' => 'IRBOSYD 135 MG TAB# /',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1312 =>
			array (
				'codename' => 'BBK00000138',
				'name' => 'YELLOW TIPE ',
				'stock' => '2480',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1313 =>
			array (
				'codename' => 'OBT00001320',
				'name' => 'ALBUSMIN CAPSUL',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1314 =>
			array (
				'codename' => 'OBT00000273',
				'name' => 'GLUCOBAY 50 MG TAB',
				'stock' => '26',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1315 =>
			array (
				'codename' => 'OBT00000124',
				'name' => 'CENDO MYDRIATYL 1% EYE DROP 5 ML',
				'stock' => '389',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1316 =>
			array (
				'codename' => 'ALK00000692',
				'name' => 'VERSAONE TROCAR 11 MM STD FIX (B11STF)',
				'stock' => '15400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1317 =>
			array (
				'codename' => 'OBT00000307',
				'name' => 'INFUSAN NS 250 ML',
				'stock' => '182',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1318 =>
			array (
				'codename' => 'ALK00000231',
				'name' => 'ETHIBON EXCEL 2 MX69G',
				'stock' => '4592',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1319 =>
			array (
				'codename' => 'OBT00000431',
				'name' => 'NEW DIATAB TAB',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1320 =>
			array (
				'codename' => 'OBT00000916',
				'name' => 'KETROBAT 30 MG/1 ML INJ',
				'stock' => '717',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1321 =>
			array (
				'codename' => 'ALK00001552',
				'name' => 'PAKET STERIL ROL TAMPON 2 CM (ISI 1) ',
				'stock' => '148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1322 =>
			array (
				'codename' => 'ALK00000690',
				'name' => 'T-CHROMIC 2-0 (C 27)',
				'stock' => '726',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1323 =>
			array (
				'codename' => 'ALK00000689',
				'name' => 'VICRYL 1 J371H',
				'stock' => '1266',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1324 =>
			array (
				'codename' => 'OBT00000430',
				'name' => 'NEUROTAM 1200 MG CAPLET',
				'stock' => '58',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1325 =>
			array (
				'codename' => 'OBT00000429',
				'name' => 'NEURONTIN 300 MG CAP',
				'stock' => '156',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1326 =>
			array (
				'codename' => 'OBT00000302',
				'name' => 'IMODIUM 2 MG TAB',
				'stock' => '73',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1327 =>
			array (
				'codename' => 'ALK00001551',
				'name' => 'PAKET STERIL ROL TAMPON 1 CM (ISI 1) ',
				'stock' => '99',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1328 =>
			array (
				'codename' => 'OBT00000428',
				'name' => 'NEULIN PS CAP',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1329 =>
			array (
				'codename' => 'ALK00000487',
				'name' => 'SENSI MAXTER EXAM (M) ONEMED - NON STERIL',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1330 =>
			array (
				'codename' => 'OBT00000121',
				'name' => 'CENDO GENTAMYCIN EYE OINTMENT 3,5 GRAM',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1331 =>
			array (
				'codename' => 'ALK00000355',
				'name' => 'HERNIA AID MEDIUM (M)',
				'stock' => '6424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1332 =>
			array (
				'codename' => 'ALK00001549',
				'name' => 'PAKET STERIL KAPAS LIDI BESAR (ISI 3) ',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1333 =>
			array (
				'codename' => 'ALK00000688',
				'name' => 'VERESS NEEDLE (UV120)',
				'stock' => '5520',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1334 =>
			array (
				'codename' => 'BBK00000111',
				'name' => 'SALMONELLA O AG GRUP D (TYPI O) CB509',
				'stock' => '1512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1335 =>
			array (
				'codename' => 'ALK00000687',
				'name' => 'WATER REPELLANT GOWN L MEDITECH',
				'stock' => '1155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1336 =>
			array (
				'codename' => 'ALK00000039',
				'name' => 'AQUAPAK 340 ML',
				'stock' => '798',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1337 =>
			array (
				'codename' => 'ALK00001548',
				'name' => 'PAKET STERIL DEPPER BALL UKURAN L (ISI 6) ',
				'stock' => '197',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1338 =>
			array (
				'codename' => 'OBT00000424',
				'name' => 'NEO MINOPHAGEN (SNMC) INJEKSI',
				'stock' => '1155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1339 =>
			array (
				'codename' => 'ALK00000192',
				'name' => 'DOCARE HAIR CLEAN',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1340 =>
			array (
				'codename' => 'ALK00000686',
				'name' => 'SOS HAND SANITIZER ANTISEPTIC 500 ML',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1341 =>
			array (
				'codename' => 'OBT00000423',
				'name' => 'NECIBLOK 500 MG/5 ML SUSP 200 ML',
				'stock' => '902',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1342 =>
			array (
				'codename' => 'OBT00000209',
				'name' => 'DISFLATYL 40 MG TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1343 =>
			array (
				'codename' => 'ALK00000485',
				'name' => 'SENSI GLOVES SMALL',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1344 =>
			array (
				'codename' => 'OBT00000234',
				'name' => 'EXTRACE 200 MG INJ',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1345 =>
			array (
				'codename' => 'OBT00000120',
				'name' => 'CENDO FLOXA MINIDOSE *',
				'stock' => '294',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1346 =>
			array (
				'codename' => 'OBT00000422',
				'name' => 'NEBACETIN POWDER 5 GRAM',
				'stock' => '204',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1347 =>
			array (
				'codename' => 'ALK00000685',
				'name' => 'PEMPERS MAMY POKO PREMIE SMALL (1.0 KG-1.5KG)',
				'stock' => '642',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1348 =>
			array (
				'codename' => 'OBT00000421',
				'name' => 'NEBACETIN OINTMENT 5 GRAM',
				'stock' => '181',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1349 =>
			array (
				'codename' => 'ALK00000593',
				'name' => 'CANUL (KARMAN) CURRET NO 6',
				'stock' => '591',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1350 =>
			array (
				'codename' => 'OBT00000205',
				'name' => 'DIOVAN 40 MG TAB',
				'stock' => '93',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1351 =>
			array (
				'codename' => 'BBK00000107',
				'name' => 'SALMONELLA H AG, ANTIGEN A (CB 511)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1352 =>
			array (
				'codename' => 'A072',
				'name' => 'BESTALIN TABLET',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1353 =>
			array (
				'codename' => 'ALK00000757',
				'name' => 'WRAPING P. AST 50 X 50 CM (PAPER GREEN)-(0207)',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1354 =>
			array (
				'codename' => 'ALK00000682',
				'name' => 'OSAKI MATERNITY NAPKIN L/4 S (NEW)',
				'stock' => '224',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1355 =>
			array (
				'codename' => 'ALK00000482',
				'name' => 'SAFIL 3-0 DS24',
				'stock' => '1028',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1356 =>
			array (
				'codename' => 'OBT00000420',
				'name' => 'NASONEX NASAL SPRAY 140',
				'stock' => '3235',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1357 =>
			array (
				'codename' => 'ALK00001547-1',
				'name' => 'PAKET STERIL DEPPER BALL UKURAN L (ISI 3) ',
				'stock' => '107',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1358 =>
			array (
				'codename' => 'OBT00000298',
				'name' => 'IKADRYL INJ *',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1359 =>
			array (
				'codename' => 'ALK00000228',
				'name' => 'ESPOCAN ',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1360 =>
			array (
				'codename' => 'OBT00000913',
				'name' => 'INPEPSA 500 MG/5 ML SUSP 200 ML',
				'stock' => '751',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1361 =>
			array (
				'codename' => 'OBT00000914',
				'name' => 'NEUROBION 5000 INJEKSI DUAL AMPOULE',
				'stock' => '107',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1362 =>
			array (
				'codename' => 'OBT00000225',
				'name' => 'EPOTREX-NP 4.000 UI INJEKSI',
				'stock' => '3696',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1363 =>
			array (
				'codename' => 'OBT00000419',
				'name' => 'NARFOZ 8 MG/4 ML INJ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1364 =>
			array (
				'codename' => 'OBT00000297',
				'name' => 'HYDRALAZINE 50 MG TAB',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1365 =>
			array (
				'codename' => 'OBT00000963',
				'name' => 'LINCOCIN 500 MG CAP',
				'stock' => '111',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1366 =>
			array (
				'codename' => 'OBT00000222',
				'name' => 'ELOCON CREAM 10 GR',
				'stock' => '1071',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1367 =>
			array (
				'codename' => 'OBT00000220',
				'name' => 'DYNASTAT 40 MG INJ',
				'stock' => '1198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1368 =>
			array (
				'codename' => 'OBT00000296',
				'name' => 'HYALGAN 20 MG/2 ML INJ',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1369 =>
			array (
				'codename' => 'ALK00000243',
				'name' => 'ETT NKK NO. 8 WORK',
				'stock' => '3168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1370 =>
			array (
				'codename' => 'ALK00000681',
				'name' => 'FOLLEY CATHETER 2WAY SILICON 24 RUSCH',
				'stock' => '1072',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1371 =>
			array (
				'codename' => 'ALK00000553',
				'name' => 'TEGADERM 1627 (10CM X 25CM) 3M',
				'stock' => '445',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1372 =>
			array (
				'codename' => 'A065',
				'name' => 'ADALAT TAB 5 MG',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1373 =>
			array (
				'codename' => 'ALK00000348',
				'name' => 'HEMO-CATH SET (8 F X 18 CM SILICONE TUNNELING)',
				'stock' => '44605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1374 =>
			array (
				'codename' => 'OBT00000206',
				'name' => 'DIOVAN 80 MG TAB',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1375 =>
			array (
				'codename' => 'OBT00000417',
				'name' => 'NARFOZ 4 MG/5 ML SYR 60ML',
				'stock' => '880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1376 =>
			array (
				'codename' => 'ALK00000479',
				'name' => 'SAFIL 2-0 CUTTING (DS 24)',
				'stock' => '1115',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1377 =>
			array (
				'codename' => 'OBT00000199',
				'name' => 'DICYNONE 500 MG TAB',
				'stock' => '136',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1378 =>
			array (
				'codename' => 'ALK00000680',
				'name' => 'FOLLEY CATHETER 2WAY SILICON 22 RUSCH',
				'stock' => '1072',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1379 =>
			array (
				'codename' => 'OBT00000187',
				'name' => 'DERMATIX TOPICAL GEL 15 GRAM',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1380 =>
			array (
				'codename' => 'ALK00000475',
				'name' => 'RECTAL TUBE NO. 26 ',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1381 =>
			array (
				'codename' => 'ALK00000182',
				'name' => 'DISP SYRINGE 10CC TERUMO',
				'stock' => '39',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1382 =>
			array (
				'codename' => 'OBT00001205',
				'name' => 'METHYLPREDNISOLONE 4 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1383 =>
			array (
				'codename' => 'OBT00000181',
				'name' => 'DARYACEF 1 GR INJ',
				'stock' => '1903',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1384 =>
			array (
				'codename' => 'ALK00000473',
				'name' => 'PROLENE 7-0 EP8755H',
				'stock' => '3648',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1385 =>
			array (
				'codename' => 'ALK00000242',
				'name' => 'ETT NKK 7.5 PORTEX (100-110-075)',
				'stock' => '5460',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1386 =>
			array (
				'codename' => 'OBT00000114',
				'name' => 'CENDO ASTHENOF EYE DROP 5 ML',
				'stock' => '214',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1387 =>
			array (
				'codename' => 'ALK00000726',
				'name' => 'STERIL PETRI DISH 90 X 15',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1388 =>
			array (
				'codename' => 'ALK00000346',
				'name' => 'HCg CASSETTE (FOKUS)-(GM0002T18864100)',
				'stock' => '153',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1389 =>
			array (
				'codename' => 'A064',
				'name' => 'ACTONEL TAB 35 MG',
				'stock' => '5500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1390 =>
			array (
				'codename' => 'BBK00000247',
				'name' => 'CARBONDIOKSIDA 25 KG (SAMATOR) 1840513',
				'stock' => '60',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1391 =>
			array (
				'codename' => 'ALK00000715',
				'name' => 'PROLENE 3-0 CUTTING (W8626)',
				'stock' => '2006',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1392 =>
			array (
				'codename' => 'OBT00000294',
				'name' => 'HIALID 0,1% 5 ML EYE DROP',
				'stock' => '924',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1393 =>
			array (
				'codename' => 'ALK00001547',
				'name' => 'PAKET STERIL DEPPER BALL UKURAN M (ISI 3) ',
				'stock' => '93',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1394 =>
			array (
				'codename' => 'ALK00000469',
				'name' => 'PROLENE 4-0 8557H',
				'stock' => '1874',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1395 =>
			array (
				'codename' => 'OBT00000172',
				'name' => 'CRAVIT 500 MG TAB',
				'stock' => '365',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1396 =>
			array (
				'codename' => 'ALK00000344',
				'name' => 'HARMONIC FOCUS CURVED SHEARS 9 CM (HAR9)',
				'stock' => '19360',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1397 =>
			array (
				'codename' => 'OBT00000156',
				'name' => 'CODITAM TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1398 =>
			array (
				'codename' => 'OBT00000151',
				'name' => 'CODEIN 20 MG TAB (100 s)',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1399 =>
			array (
				'codename' => 'ALK00000549',
				'name' => 'TAMPON NETCELL',
				'stock' => '1540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1400 =>
			array (
				'codename' => 'OBT00000415',
				'name' => 'NARFOZ 4 MG/2 ML INJ',
				'stock' => '278',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1401 =>
			array (
				'codename' => 'BBK00000246',
				'name' => 'TABUNG O2 6 METER KUBIK ( BESAR )',
				'stock' => '80',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1402 =>
			array (
				'codename' => 'ALK00000239',
				'name' => 'ETT NKK 6 PORTEX (100-110-060)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1403 =>
			array (
				'codename' => 'ALK00001546',
				'name' => 'PAKET STERIL DEPPER BALL UKURAN S (ISI 5) ',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1404 =>
			array (
				'codename' => 'BBK00000102',
				'name' => 'RA LATEX TEST KIT/AIM RF (FRAL 100)',
				'stock' => '8800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1405 =>
			array (
				'codename' => 'ALK00000177',
				'name' => 'DISP CATHETER TIP 60 CC TERUMO',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1406 =>
			array (
				'codename' => 'OBT00000917',
				'name' => 'SPINOCAN NEEDLE 27G',
				'stock' => '517',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1407 =>
			array (
				'codename' => 'ALK00000706',
				'name' => 'AMBU BLUE SENSOR INFANT/PEDIATRIC (NF-00-S)',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1408 =>
			array (
				'codename' => 'ALK00000684',
				'name' => 'PEMPERS MAMI POKO NEWBORN (ISI 14)',
				'stock' => '452',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1409 =>
			array (
				'codename' => 'OBT00000292',
				'name' => 'HERBESSER INJ 50 MG# /',
				'stock' => '4410',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1410 =>
			array (
				'codename' => 'OBT00000142',
				'name' => 'CLANEKSI 1 GR INJ',
				'stock' => '1004',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1411 =>
			array (
				'codename' => 'OBT00000131',
				'name' => 'CENDO XITROL EYE DROP 5 ML',
				'stock' => '300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1412 =>
			array (
				'codename' => 'ALK00001545',
				'name' => 'PAKET STERIL LAPARATOMY SPONGES X-RAY 35 X35 CM (ISI 1) ',
				'stock' => '188',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1413 =>
			array (
				'codename' => 'OBT00000412',
				'name' => 'NACL 0.9%-1000 ML WIDATRA',
				'stock' => '204',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1414 =>
			array (
				'codename' => 'ALK00000580',
				'name' => 'VASOFIX SAFETY G24 X 3/4',
				'stock' => '333',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1415 =>
			array (
				'codename' => 'OBT00000203',
				'name' => 'DIGENTA CREAM 10 GRAM',
				'stock' => '800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1416 =>
			array (
				'codename' => 'OBT00000287',
				'name' => 'HEPA-MERZ INJ 10 ML',
				'stock' => '1150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1417 =>
			array (
				'codename' => 'ALK00000676',
				'name' => 'PLATE CABLE ADULT',
				'stock' => '1320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1418 =>
			array (
				'codename' => 'ALK00000674',
				'name' => 'NEEDLE 18G X 1 1/2 TERUMO',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1419 =>
			array (
				'codename' => 'OBT00001294',
				'name' => 'NITROKAF RETARD 2.5 MG CAP',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1420 =>
			array (
				'codename' => 'OBT00000290',
				'name' => 'HERBESSER CD 100 CAP',
				'stock' => '86',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1421 =>
			array (
				'codename' => 'OBT00000117',
				'name' => 'CENDO CENFRESH MINIDOSE',
				'stock' => '234',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1422 =>
			array (
				'codename' => 'ALK00000237',
				'name' => 'ETT NKK 5 PORTEX (100-110-050)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1423 =>
			array (
				'codename' => 'ALK00000464',
				'name' => 'PROCEED SURGICAL MESH 15 CM X 20 CM (PCDG-1)',
				'stock' => '135100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1424 =>
			array (
				'codename' => 'OBT00000116',
				'name' => 'CENDO CATARLENT EYE DROP 15 ML',
				'stock' => '337',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1425 =>
			array (
				'codename' => 'ALK00000335',
				'name' => 'GUIDE WIRE 0.035-260 CM ANGLED TIP (RF-GA35263M)',
				'stock' => '8305',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1426 =>
			array (
				'codename' => 'ALK00000574',
				'name' => 'UROGARD ADULT (UD-B3112)TERUMO',
				'stock' => '814',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1427 =>
			array (
				'codename' => 'ALK00001659',
				'name' => 'ETT NKK NO. 7 WORK / FORSCH',
				'stock' => '2880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1428 =>
			array (
				'codename' => 'BBK00000241',
				'name' => 'WASH 1 REAGENT (CENTAUR)',
				'stock' => '11892',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1429 =>
			array (
				'codename' => 'ALK00000234',
				'name' => 'ETHILON 10-0 (U 7003)',
				'stock' => '2968',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1430 =>
			array (
				'codename' => 'ALK00000524',
				'name' => 'STOMACH TUBE NO.18 TERUMO',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1431 =>
			array (
				'codename' => 'ALK00000230',
				'name' => 'ETHIBON 2-0 W10B55',
				'stock' => '3843',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1432 =>
			array (
				'codename' => 'ALK00000460',
				'name' => 'POT PLASTIK 15 GRAM',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1433 =>
			array (
				'codename' => 'OBT00000411',
				'name' => 'NACL 0,9% PIGGY BACK INFUS 100 ML',
				'stock' => '197',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1434 =>
			array (
				'codename' => 'OBT00000202',
				'name' => 'DIFLUCAN 50 MG CAP',
				'stock' => '357',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1435 =>
			array (
				'codename' => 'ALK00000563',
				'name' => 'TONGUE SPATEL KAYU',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1436 =>
			array (
				'codename' => 'ALK00000226',
				'name' => 'EPITHEASY (SKIN HISTOLOGICAL BIOPSY) 5 BLADE X 7 MM',
				'stock' => '1265',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1437 =>
			array (
				'codename' => 'OBT00000201',
				'name' => 'DIFLUCAN 2 MG/ML INF 100 ML',
				'stock' => '4724',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1438 =>
			array (
				'codename' => 'OBT00000409',
				'name' => 'NACL 0,9% INFUS 25 CC OTSUKA',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1439 =>
			array (
				'codename' => 'ALK00000532',
				'name' => 'SUCTION CATHETER 8 FASTFLOW/REMEDI',
				'stock' => '80',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1440 =>
			array (
				'codename' => 'OBT00000200',
				'name' => 'DIFLUCAN 150 MG CAP',
				'stock' => '1169',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1441 =>
			array (
				'codename' => 'ALK00000673',
				'name' => 'SOFTEX MATERNITY',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1442 =>
			array (
				'codename' => 'ALK00000523',
				'name' => 'STOMACH TUBE NO.16 TERUMO',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1443 =>
			array (
				'codename' => 'ALK00000457',
				'name' => 'POLYSORB 2-0 TAPER GL 123',
				'stock' => '1001',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1444 =>
			array (
				'codename' => 'ALK00000455',
				'name' => 'PLAIN GUT 5-0 1626G',
				'stock' => '1644',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1445 =>
			array (
				'codename' => 'OBT00000112',
				'name' => 'CELESTAMIN SYR 60 ML',
				'stock' => '2265',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1446 =>
			array (
				'codename' => 'OBT00000194',
				'name' => 'DEXTROSE 5 % PIGGY BACK 100 ML',
				'stock' => '152',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1447 =>
			array (
				'codename' => 'ALK00000672',
				'name' => 'PROLENE 4-0 W8007T',
				'stock' => '1216',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1448 =>
			array (
				'codename' => 'ALK00000332',
				'name' => 'GUDEL 3 (9.0) ORANGE INTERSURGICAL',
				'stock' => '939',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1449 =>
			array (
				'codename' => 'ALK00001652',
				'name' => 'ETT NKK NO. 2,5 WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1450 =>
			array (
				'codename' => 'ALK00000029',
				'name' => 'ALPHAMED PENCIL STANDARD BIRU (AP01)',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1451 =>
			array (
				'codename' => 'OBT00000192',
				'name' => 'DEXTROSE 10% 500ML OTSUKA',
				'stock' => '159',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1452 =>
			array (
				'codename' => 'BBK00000099',
				'name' => 'PHOSPHATE INORGANIC COBAS (100119561)',
				'stock' => '7955',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1453 =>
			array (
				'codename' => 'ALK00000446',
				'name' => 'NURSE CAP HOSPILAB',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1454 =>
			array (
				'codename' => 'OBT00000107',
				'name' => 'CEFSPAN 100 MG CAP',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1455 =>
			array (
				'codename' => 'OBT00000109',
				'name' => 'CEFSPAN 200 MG TAB',
				'stock' => '365',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1456 =>
			array (
				'codename' => 'ALK00000670',
				'name' => 'VERBAN 4 X 5 CM DRC',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1457 =>
			array (
				'codename' => 'ALK00000324',
				'name' => 'GOT SF6 MULTI',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1458 =>
			array (
				'codename' => 'ALK00000520',
				'name' => 'STOMACH TUBE NO.10 TERUMO',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1459 =>
			array (
				'codename' => 'ALK00000443',
				'name' => 'NEEDLE BD ULTRA-FINE PEN 5 MM X 31 G ',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1460 =>
			array (
				'codename' => 'OBT00001311-1',
				'name' => 'TRILAC 10 MG/ML INJEKSI',
				'stock' => '1000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1461 =>
			array (
				'codename' => 'OBT00001325',
				'name' => 'ANPIRIDE 4 MG TABLET',
				'stock' => '67',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1462 =>
			array (
				'codename' => 'OBT00001316',
				'name' => 'ETORVEL 120 MG TABLET',
				'stock' => '95',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1463 =>
			array (
				'codename' => 'OBT00001275',
				'name' => 'S-OMEVELL 40 MG TAB',
				'stock' => '185',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1464 =>
			array (
				'codename' => 'ALK00001550',
				'name' => 'PAKET STERIL KAPAS LIDI KECIL (ISI 3) ',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1465 =>
			array (
				'codename' => 'ALK00000468',
				'name' => 'PROLENE 4-0 8521H',
				'stock' => '1871',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1466 =>
			array (
				'codename' => 'ALK00000217',
				'name' => 'ENDOBRONCHIAL TUBE STR 35FR LEFT (198-35L)',
				'stock' => '31900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1467 =>
			array (
				'codename' => 'ALK00000441',
				'name' => 'NEEDLE 26G X 1/2 TERUMO',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1468 =>
			array (
				'codename' => 'ALK00000320',
				'name' => 'GELSPON ANAL 80 X 30',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1469 =>
			array (
				'codename' => 'OBT00000186',
				'name' => 'DEPAKOTE ER 250 MG TAB#',
				'stock' => '101',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1470 =>
			array (
				'codename' => 'ALK00000669',
				'name' => 'VERBAN 4 X 8 CM DRC',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1471 =>
			array (
				'codename' => 'BBK00000028',
				'name' => 'ANTI HIV 1/2 CASETTE (FOKUS)',
				'stock' => '521',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1472 =>
			array (
				'codename' => 'OBT00000286',
				'name' => 'HEPA-MERZ GRANULE (10 s)',
				'stock' => '399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1473 =>
			array (
				'codename' => 'OBT00001286',
				'name' => 'PARACETAMOL 500 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1474 =>
			array (
				'codename' => 'OBT00000285',
				'name' => 'HEMOBION CAP',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1475 =>
			array (
				'codename' => 'ALK00000211',
				'name' => 'EEG PASTE Z-401CE ELEFIX 400GR',
				'stock' => '12280',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1476 =>
			array (
				'codename' => 'OBT00000180',
				'name' => 'DALACIN C 300 MG CAP',
				'stock' => '167',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1477 =>
			array (
				'codename' => 'BBK00000236',
				'name' => 'VIDAS T3 (30403)',
				'stock' => '43560',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1478 =>
			array (
				'codename' => 'ALK00000155',
				'name' => 'CVC SET CENTRAL VENOUS CATH KIT 24 GAX12 CM(AK-04660-S)ARROW',
				'stock' => '11000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1479 =>
			array (
				'codename' => 'ALK00000208',
				'name' => 'ECHELON FLEX 60 ART LNR CUT (PLE60A)',
				'stock' => '138600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1480 =>
			array (
				'codename' => 'ALK00000438',
				'name' => 'NEEDLE 24G X 1 TERUMO',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1481 =>
			array (
				'codename' => 'ALK00000319',
				'name' => 'GELITASPON TAMPON ANAL STERIL GS.210',
				'stock' => '728',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1482 =>
			array (
				'codename' => 'OBT00000105',
				'name' => 'CEFAT FORTE 250 MG/5 ML DRY SYR 60 ML',
				'stock' => '795',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1483 =>
			array (
				'codename' => 'OBT00000798',
				'name' => 'KTM 100 MG/ML 10 ML INJ NF',
				'stock' => '2145',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1484 =>
			array (
				'codename' => 'ALK00001562',
				'name' => 'ORTHOPEDIC SET HOGY (ORS2138)',
				'stock' => '8162',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1485 =>
			array (
				'codename' => 'OBT00000175',
				'name' => 'CRESTOR 10 MG TAB',
				'stock' => '193',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1486 =>
			array (
				'codename' => 'ALK00000435',
				'name' => 'NEBULIZER PED 1173 / 8906 ',
				'stock' => '386',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1487 =>
			array (
				'codename' => 'OBT00000104',
				'name' => 'CEFAT 500 MG CAP',
				'stock' => '109',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1488 =>
			array (
				'codename' => 'ALK00000151',
				'name' => 'CUTICELL CLASSIC 10 CM X 40 CM',
				'stock' => '242',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1489 =>
			array (
				'codename' => 'OBT00000174',
				'name' => 'CRAVIT 750 MG/150 ML INFUS',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1490 =>
			array (
				'codename' => 'OBT00000102',
				'name' => 'CEDOCARD IV 1 MG/ML INJ 10 ML',
				'stock' => '866',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1491 =>
			array (
				'codename' => 'OBT00000797',
				'name' => 'VIKIA HIV 1/2 (31112)',
				'stock' => '37400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1492 =>
			array (
				'codename' => 'ALK00000518',
				'name' => 'STERILIZATION WRAP 140 X 180 (SKS-1180B)',
				'stock' => '323',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1493 =>
			array (
				'codename' => 'ALK00000428',
				'name' => 'MUCUS EXTRACTOR ',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1494 =>
			array (
				'codename' => 'OBT00000407',
				'name' => 'MYONAL 50 MG TAB',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1495 =>
			array (
				'codename' => 'ALK00000427',
				'name' => 'MONOSYN 6-0 TAPER (HRT17)',
				'stock' => '2611',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1496 =>
			array (
				'codename' => 'OBT00000405',
				'name' => 'MYCORINE 2% CREAM 15 GR',
				'stock' => '407',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1497 =>
			array (
				'codename' => 'ALK00000202',
				'name' => 'EAR PLUG 311-1250',
				'stock' => '72',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1498 =>
			array (
				'codename' => 'OBT00000403',
				'name' => 'MYCAMINE 50 MG INJ',
				'stock' => '7204',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1499 =>
			array (
				'codename' => 'OBT00000168',
				'name' => 'COVERAM 5MG/5MG TAB',
				'stock' => '108',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1500 =>
			array (
				'codename' => 'OBT00000101',
				'name' => 'CEDOCARD 5 MG TAB',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1501 =>
			array (
				'codename' => 'OBT00000167',
				'name' => 'COUNTERPAIN CREAM 30 GR',
				'stock' => '362',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1502 =>
			array (
				'codename' => 'OBT00001277',
				'name' => 'ONDAVELL ODT 8 MG TAB',
				'stock' => '231',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1503 =>
			array (
				'codename' => 'ALK00000421',
				'name' => 'MONOCRYL 3-0 CUTTING (MCP4271H)',
				'stock' => '1466',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1504 =>
			array (
				'codename' => 'OBT00000796',
				'name' => 'VAKSIN POLIO BIVALEN',
				'stock' => '670',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1505 =>
			array (
				'codename' => 'OBT00000795',
				'name' => 'VAKSIN HEPATITIS B REKOMBINAN 0,5 ML BIOFARMA',
				'stock' => '871',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1506 =>
			array (
				'codename' => 'OBT00001052',
				'name' => 'PRIDESIA 5 MG',
				'stock' => '19',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1507 =>
			array (
				'codename' => 'ALK00000668',
				'name' => 'UNDERPAD STERIL  60 X 90',
				'stock' => '76',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1508 =>
			array (
				'codename' => 'ALK00000026',
				'name' => 'ALERT CLIP YELLOW (SATO)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1509 =>
			array (
				'codename' => 'OBT00000667',
				'name' => 'DILTIAZEM 30 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1510 =>
			array (
				'codename' => 'OBT00000100',
				'name' => 'CEDOCARD 10 MG TAB',
				'stock' => '17',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1511 =>
			array (
				'codename' => 'ALK00000311',
				'name' => 'FOLLEY CATHETER 2WAY SILICON 16 RUSH',
				'stock' => '1097',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1512 =>
			array (
				'codename' => 'OBT00000166',
				'name' => 'CORTIDEX 0,5 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1513 =>
			array (
				'codename' => 'OBT00000094',
				'name' => 'CARDURA 1 MG TAB',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1514 =>
			array (
				'codename' => 'OBT00000165',
				'name' => 'CORDARON INJ#',
				'stock' => '401',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1515 =>
			array (
				'codename' => 'ALK00000309',
				'name' => 'FOLLEY CATHETER 2WAY 24 RUSCH#',
				'stock' => '155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1516 =>
			array (
				'codename' => 'OBT00000163',
				'name' => 'CONCOR 5 MG TAB',
				'stock' => '86',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1517 =>
			array (
				'codename' => 'OBT00000160',
				'name' => 'COMTUSI SYRUP 60 ML',
				'stock' => '386',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1518 =>
			array (
				'codename' => 'OBT00000093',
				'name' => 'CARDISMO 20MG TAB',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1519 =>
			array (
				'codename' => 'OBT00000092',
				'name' => 'CARDIO ASPIRIN 100 MG ENTERIC-COATED TAB',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1520 =>
			array (
				'codename' => 'OBT00000159',
				'name' => 'COMBIVENT UNIT DOSE VIAL 2.5ml  ',
				'stock' => '181',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1521 =>
			array (
				'codename' => 'OBT00000157',
				'name' => 'COLSANSETIN 250MG CAP',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1522 =>
			array (
				'codename' => 'OBT00000089',
				'name' => 'BUSCOPAN 20 MG/ML INJ',
				'stock' => '359',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1523 =>
			array (
				'codename' => 'ALK00000667',
				'name' => 'NOVA-T IUD',
				'stock' => '3028',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1524 =>
			array (
				'codename' => 'OBT00000611',
				'name' => 'XENICAL 120 MG CAP',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1525 =>
			array (
				'codename' => 'ALK00000304',
				'name' => 'FOLLEY CATHETER 2WAY 14 RUSCH',
				'stock' => '163',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1526 =>
			array (
				'codename' => 'OBT00000154',
				'name' => 'CODIPRONT CUM EXP SYRUP 60 ML',
				'stock' => '611',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1527 =>
			array (
				'codename' => 'ALK00000411',
				'name' => 'MASKER IKAT KARET SURG 1022',
				'stock' => '23',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1528 =>
			array (
				'codename' => 'ALK00000410',
				'name' => 'MASKER EAR LOOP ONEMED',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1529 =>
			array (
				'codename' => 'OBT00001259',
				'name' => 'BAQUINOR 250 MG TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1530 =>
			array (
				'codename' => 'OBT00000153',
				'name' => 'CODIPRONT CUM EXP CAP',
				'stock' => '114',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1531 =>
			array (
				'codename' => 'OBT00000088',
				'name' => 'BUSCOPAN 10 MG DRAGEE',
				'stock' => '29',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1532 =>
			array (
				'codename' => 'OBT00000575',
				'name' => 'UTROGESTAN 100 MG SOFT CAP',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1533 =>
			array (
				'codename' => 'OBT00000087',
				'name' => 'BURNAZIN PLUS CREAM 25 GR ',
				'stock' => '1573',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1534 =>
			array (
				'codename' => 'OBT00000086',
				'name' => 'BROADCED 1 GR INJ',
				'stock' => '2050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1535 =>
			array (
				'codename' => 'OBT00000792',
				'name' => 'METACOSFAR 320 MG/ML INJ 100 ML',
				'stock' => '8800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1536 =>
			array (
				'codename' => 'ALK00000191',
				'name' => 'DISPOSABLE SPO2 SENSOR (NEO-PED-ADULT)-(M1133A)',
				'stock' => '3080',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1537 =>
			array (
				'codename' => 'OBT00000152',
				'name' => 'CODIPRONT CAP',
				'stock' => '92',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1538 =>
			array (
				'codename' => 'ALK00000190',
				'name' => 'DISPOSABLE GROUNDING PADS (DGP-PM-10)',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1539 =>
			array (
				'codename' => 'OBT00000150',
				'name' => 'COBAZIM 1000 MCG CAP#',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1540 =>
			array (
				'codename' => 'ALK00000303',
				'name' => 'FOLLEY CATHETER 2WAY 12 RUSCH',
				'stock' => '155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1541 =>
			array (
				'codename' => 'BBK00000079',
				'name' => 'METHAMPHETAMIN CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1542 =>
			array (
				'codename' => 'OBT00000790',
				'name' => 'FUTROLIT INF 500 ML',
				'stock' => '628',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1543 =>
			array (
				'codename' => 'ALK00000516',
				'name' => 'STERIL GLOVE GAMMEX PF 7,5',
				'stock' => '188',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1544 =>
			array (
				'codename' => 'ALK00000666',
				'name' => 'INTUBATING STYLET NO 3 (100/120/300) - (PORTEX)',
				'stock' => '1485',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1545 =>
			array (
				'codename' => 'ALK00000224',
				'name' => 'ENSEAL G2 TISSUE SEALER, CURVED JAW 35 CM (NSLG2C35)',
				'stock' => '20460',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1546 =>
			array (
				'codename' => 'OBT00000539',
				'name' => 'TELFAST PLUS TAB',
				'stock' => '57',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1547 =>
			array (
				'codename' => 'ALK00000665',
				'name' => 'INTUBATING  STYLET NO 2 (100/120/200) - (PORTEX)',
				'stock' => '1485',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1548 =>
			array (
				'codename' => 'OBT00000145',
				'name' => 'CLAST 0,5 MG TAB',
				'stock' => '19',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1549 =>
			array (
				'codename' => 'OBT00001046',
				'name' => 'HARNAL D 0,2 MG TAB',
				'stock' => '148',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1550 =>
			array (
				'codename' => 'ALK00000181',
				'name' => 'DISP PATIENT HOSE SYSTEM/BREATHING CIRCUIT WM (WM-28695)',
				'stock' => '12650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1551 =>
			array (
				'codename' => 'ALK00000404',
				'name' => 'LOMBASKIN T-1 (71-86 CM)-(0870 02)',
				'stock' => '17600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1552 =>
			array (
				'codename' => 'ALK00000295',
				'name' => 'FOGARTY ARTERIAL EMBOLECTOMY CATHETER 5 F',
				'stock' => '24200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1553 =>
			array (
				'codename' => 'OBT00000144',
				'name' => 'CLARITIN SYRUP 60 ML#',
				'stock' => '845',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1554 =>
			array (
				'codename' => 'ALK00000180',
				'name' => 'DISP NEONATAL NIBP CUFF LATEX FREE NO.3 PHILIPS(M1870B)',
				'stock' => '1980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1555 =>
			array (
				'codename' => 'OBT00000503',
				'name' => 'SANTA E 100 S-C CAPLET',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1556 =>
			array (
				'codename' => 'ALK00000178',
				'name' => 'DISP DRAINAGE CATHETER KIT 10 FR',
				'stock' => '16500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1557 =>
			array (
				'codename' => 'OBT00000141',
				'name' => 'CLANEKSI (500 MG, 125 MG) TAB',
				'stock' => '90',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1558 =>
			array (
				'codename' => 'ALK00000396',
				'name' => 'KONDOM SUTRA ISI 12 NEW (7873)',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1559 =>
			array (
				'codename' => 'ALK00000176',
				'name' => 'DISP BIOSY FORCEPS SPIKED 2.3 MM-230 CM (NOE222-G)',
				'stock' => '3025',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1560 =>
			array (
				'codename' => 'OBT00000140',
				'name' => 'CLANEKSI (125 MG, 31.25 MG)/5 ML DRY SYR 60 ML#',
				'stock' => '399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1561 =>
			array (
				'codename' => 'ALK00000175',
				'name' => 'DISP BIOSY FORCEPS SPIKED 2.3 MM-180 CM (NOE222-C)',
				'stock' => '3025',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1562 =>
			array (
				'codename' => 'OBT00000138',
				'name' => 'CINOLON CREAM 10 GRAM',
				'stock' => '176',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1563 =>
			array (
				'codename' => 'ALK00000663',
				'name' => 'GUDEL 6 (12) RUSCH',
				'stock' => '1135',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1564 =>
			array (
				'codename' => 'ALK00000393',
				'name' => 'KERTAS TREADMILL GE MARGUETTE (9402-020)',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1565 =>
			array (
				'codename' => 'ALK00000103',
				'name' => 'CATHETER-YASHIRO 5 FR (RF-DG95007M)',
				'stock' => '7260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1566 =>
			array (
				'codename' => 'ALK00001100',
				'name' => 'POT OBAT 75 CC',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1567 =>
			array (
				'codename' => 'OBT00000137',
				'name' => 'CIALIS 20 MG TAB',
				'stock' => '1574',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1568 =>
			array (
				'codename' => 'ALK00000174',
				'name' => 'DILATOR W/ AQ HYDROPHILIC COATING 8 FR(JCD8.0-38-20-HC)',
				'stock' => '4070',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1569 =>
			array (
				'codename' => 'OBT00000136',
				'name' => 'CHLORPROMAZINE/ CPZ 100 MG TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1570 =>
			array (
				'codename' => 'ALK00000097',
				'name' => 'CANISTER 600 ML (CTR600)',
				'stock' => '4620',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1571 =>
			array (
				'codename' => 'OBT00000135',
				'name' => 'CHLORAMFECORT H CREAM 10 GRAM',
				'stock' => '115',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1572 =>
			array (
				'codename' => 'ALK00000173',
				'name' => 'DILATOR W/ AQ HYDROPHILIC COATING 7FR(JCD7.0-38-20-HC)',
				'stock' => '4070',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1573 =>
			array (
				'codename' => 'ALK00000389',
				'name' => 'KASSA WITH X-RAY 10X10 16 PLY HOSPILAB*',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1574 =>
			array (
				'codename' => 'ALK00000023',
				'name' => 'AFO-CUSTOMADE DEWASA PRATAMA',
				'stock' => '16500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1575 =>
			array (
				'codename' => 'ALK00000169',
				'name' => 'DERMABOND 2 SKIN ADHESIVE HV (AHV6)#',
				'stock' => '3278',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1576 =>
			array (
				'codename' => 'OBT00000129',
				'name' => 'CENDO TOBROSON MINI DOSE',
				'stock' => '302',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1577 =>
			array (
				'codename' => 'OBT00000081',
				'name' => 'BRAINACT 500 MG INJ',
				'stock' => '733',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1578 =>
			array (
				'codename' => 'OBT00000080',
				'name' => 'BRAINACT 1000 MG/8 ML INJ',
				'stock' => '1144',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1579 =>
			array (
				'codename' => 'BBK00000229',
				'name' => 'VIDAS 25 OH VITAMIN D TOTAL (30463)',
				'stock' => '153725',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1580 =>
			array (
				'codename' => 'ALK00000168',
				'name' => 'DEPPER BALL SMALL X-RAY',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1581 =>
			array (
				'codename' => 'ALK00000081',
				'name' => 'BLOODSTOP IX',
				'stock' => '6655',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1582 =>
			array (
				'codename' => 'ALK00000661',
				'name' => 'VAGINAL SPECULUM M',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1583 =>
			array (
				'codename' => 'ALK00000513',
				'name' => 'STERIL GLOVE GAMMEX PF 6',
				'stock' => '226',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1584 =>
			array (
				'codename' => 'OBT00000788',
				'name' => 'BETADIN SOL 10% 30 ML',
				'stock' => '187',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1585 =>
			array (
				'codename' => 'OBT00000079',
				'name' => 'BORRAGINOL-S SUPP',
				'stock' => '117',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1586 =>
			array (
				'codename' => 'OBT00000387',
				'name' => 'MICARDIS 80 MG TAB (ISI 20)',
				'stock' => '208',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1587 =>
			array (
				'codename' => 'OBT00000786',
				'name' => 'ALLOPURINOL 100 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1588 =>
			array (
				'codename' => 'ALK00000973',
				'name' => 'KAPSUL KOSONG 3',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1589 =>
			array (
				'codename' => 'ALK00000662',
				'name' => 'VAGINAL SPECULUM L',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1590 =>
			array (
				'codename' => 'OBT00000078',
				'name' => 'BORRAGINOL-S RECTAL OINT 15 GRAM',
				'stock' => '836',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1591 =>
			array (
				'codename' => 'ALK00000077',
				'name' => 'BLOOD BAG PHLEBOTOMY 350 ML (811-3003)',
				'stock' => '561',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1592 =>
			array (
				'codename' => 'OBT00000369',
				'name' => 'MAINTATE 5 MG TAB#',
				'stock' => '78',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1593 =>
			array (
				'codename' => 'ALK00000292',
				'name' => 'FM CREPE 3 IN (7,5 CM X 4,55 M)',
				'stock' => '642',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1594 =>
			array (
				'codename' => 'OBT00000122',
				'name' => 'CENDO HYALUB MINIDOSE',
				'stock' => '580',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1595 =>
			array (
				'codename' => 'OBT00000077',
				'name' => 'BORRAGINOL-N RECTAL OINT 15 GRAM',
				'stock' => '621',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1596 =>
			array (
				'codename' => 'ALK00000075',
				'name' => 'BLADED MAMMOTOME EX PROBE (WITH TUBE SET) 8 G',
				'stock' => '70400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1597 =>
			array (
				'codename' => 'BBK00000225',
				'name' => 'UX II PACK-SED CM021064',
				'stock' => '38178',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1598 =>
			array (
				'codename' => 'ALK00000382',
				'name' => 'INTRAFIX PRIMELINE LUER LOCK (4021819/596977)',
				'stock' => '231',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1599 =>
			array (
				'codename' => 'OBT00000073',
				'name' => 'BLISTRA 10 MG/10 ML INJ',
				'stock' => '2252',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1600 =>
			array (
				'codename' => 'OBT00000346',
				'name' => 'LASAL EXP SYR 100 ML',
				'stock' => '345',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1601 =>
			array (
				'codename' => 'OBT00000069',
				'name' => 'BIOPLACENTON JELLY 15 GRAM *',
				'stock' => '162',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1602 =>
			array (
				'codename' => 'ALK00000163',
				'name' => 'DELTA DRY (7.5 CMX2.4 M)',
				'stock' => '734',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1603 =>
			array (
				'codename' => 'OBT00000318',
				'name' => 'JANUMET 50 MG/1000 MG TAB#',
				'stock' => '81',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1604 =>
			array (
				'codename' => 'OBT00000119',
				'name' => 'CENDO FENICOL 0,25% EYE DROP 5 ML*',
				'stock' => '241',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1605 =>
			array (
				'codename' => 'OBT00000310',
				'name' => 'INFUSAN RL DP',
				'stock' => '196',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1606 =>
			array (
				'codename' => 'OBT00000118',
				'name' => 'CENDO EFRISEL 10 % TETES MATA 5CC',
				'stock' => '168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1607 =>
			array (
				'codename' => 'OBT00000065',
				'name' => 'BETASERC 8 MG TAB#',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1608 =>
			array (
				'codename' => 'OBT00000299',
				'name' => 'ILIADIN 0,025% NASAL DROP 10 ML',
				'stock' => '580',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1609 =>
			array (
				'codename' => 'ALK00000152',
				'name' => 'CUTIMED ALGINATE 10CM X 10CM',
				'stock' => '502',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1610 =>
			array (
				'codename' => 'BBK00000212',
				'name' => 'SULFOLYSER 1.5 (XN BJ 350 971)',
				'stock' => '34650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1611 =>
			array (
				'codename' => 'OBT00001138',
				'name' => 'AMOXSAN 1 GRAM INJEKSI',
				'stock' => '2464',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1612 =>
			array (
				'codename' => 'OBT00000905',
				'name' => 'CENDO GENTAMYCIN 0,3% EYE DROP 5 ML',
				'stock' => '312',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1613 =>
			array (
				'codename' => 'OBT00000060',
				'name' => 'BENOSON CREAM 5 GR',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1614 =>
			array (
				'codename' => 'OBT00000316',
				'name' => 'ISORBID 10 MG/10 ML INJ',
				'stock' => '726',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1615 =>
			array (
				'codename' => 'OBT00000064',
				'name' => 'BETASERC 24 MG TAB',
				'stock' => '96',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1616 =>
			array (
				'codename' => 'ALK00000660',
				'name' => 'VAGINAL SPECULUM S',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1617 =>
			array (
				'codename' => 'A5856',
				'name' => 'Insulin - 2',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1618 =>
			array (
				'codename' => 'OBT00001296',
				'name' => 'HYDROXIN 200 MG TABLET',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1619 =>
			array (
				'codename' => 'OBT00001298',
				'name' => 'TERRALIN PROTECT 2000ML',
				'stock' => '11859',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1620 =>
			array (
				'codename' => 'ALK00001661',
				'name' => 'STERILIT OIL SPRAY 300 ML (JG600)',
				'stock' => '5027',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1621 =>
			array (
				'codename' => 'ALK00000653',
				'name' => 'IOPAMIRO 370/100ML *',
				'stock' => '6691',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1622 =>
			array (
				'codename' => 'ALK00000147',
				'name' => 'CURAVAC SILVER LARGE',
				'stock' => '14850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1623 =>
			array (
				'codename' => 'OBT00000274',
				'name' => 'GLUCOPHAGE 500 MG TAB',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1624 =>
			array (
				'codename' => 'BBK00000085',
				'name' => 'NONNE 100 ML 057-0746',
				'stock' => '1859',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1625 =>
			array (
				'codename' => 'ALK00000144',
				'name' => 'C-SECTION DASOL PACK (70606)',
				'stock' => '8987',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1626 =>
			array (
				'codename' => 'ALK00000659',
				'name' => 'GELANG ADULT WHITE',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1627 =>
			array (
				'codename' => 'ALK00000652',
				'name' => 'KAPAS KECANTIKAN SELECTION 35 GRAM',
				'stock' => '82',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1628 =>
			array (
				'codename' => 'BBK00000303',
				'name' => 'ACIDUM SALICYLICUM PULV',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1629 =>
			array (
				'codename' => 'ALK00000140',
				'name' => 'CORRUGATED TUBE + MASKER (160 CM + MASKER ADULT)',
				'stock' => '638',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1630 =>
			array (
				'codename' => 'OBT00000289',
				'name' => 'HERBESSER 30 MG TAB',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1631 =>
			array (
				'codename' => 'OBT00000785',
				'name' => 'DOBUTAMIN GIULINI 250 MG/50 ML INJ ',
				'stock' => '2586',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1632 =>
			array (
				'codename' => 'ALK00000020',
				'name' => 'ADMINISTRATION SET FOR PLATELET#',
				'stock' => '519',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1633 =>
			array (
				'codename' => 'ALK00000656',
				'name' => 'STRATAFIX 2-0 TAPER (SXPD2B414)',
				'stock' => '5610',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1634 =>
			array (
				'codename' => 'ALK00000288',
				'name' => 'FLAT ROLL R43 (20CMX200M)',
				'stock' => '13200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1635 =>
			array (
				'codename' => 'OBT00001190',
				'name' => 'BENZOLAC-CL GEL 10 GRAM',
				'stock' => '261',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1636 =>
			array (
				'codename' => 'ALK00000050',
				'name' => 'AUTOCLAVE BAG KECIL 0.04 X 30 X 60 (25049)',
				'stock' => '94',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1637 =>
			array (
				'codename' => 'BBK00000080',
				'name' => 'MORPHINE CASETTE (FOKUS)',
				'stock' => '251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1638 =>
			array (
				'codename' => 'ALK00000137',
				'name' => 'CORE BIOPSY NEEDLE 14-11 MM (ACE141503/141153) TSK',
				'stock' => '6699',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1639 =>
			array (
				'codename' => 'ALK00000654',
				'name' => 'USG PAPER SONY UPP 110HG',
				'stock' => '1800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1640 =>
			array (
				'codename' => 'ALK00000132',
				'name' => 'COMPRILAN 6 CM X 5 M (01026-00)',
				'stock' => '624',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1641 =>
			array (
				'codename' => 'OBT00000907',
				'name' => 'CENDO PANTOCAIN 2% EYE DROP 5 ML *',
				'stock' => '667',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1642 =>
			array (
				'codename' => 'OBT00000908',
				'name' => 'ALKOHOL 70% 100 ML BOTOL IKA',
				'stock' => '150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1643 =>
			array (
				'codename' => 'OBT00000054',
				'name' => 'BACTESYN 1.5 GRAM INJ',
				'stock' => '1886',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1644 =>
			array (
				'codename' => 'OBT00001182',
				'name' => 'NIMOTOP 30 MG TAB',
				'stock' => '83',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1645 =>
			array (
				'codename' => 'OBT00000058',
				'name' => 'BAQUINOR FORTE FC 500 MG CAPLET',
				'stock' => '102',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1646 =>
			array (
				'codename' => 'ALK00000376',
				'name' => 'BRAUNODERM SPRAY 250 ML',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1647 =>
			array (
				'codename' => 'ALK00000122',
				'name' => 'CLINVAC 400 ML M (4P-SM)',
				'stock' => '4675',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1648 =>
			array (
				'codename' => 'OBT00000906',
				'name' => 'CENDO PANTOCAIN 0,5% EYE DROP*',
				'stock' => '134',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1649 =>
			array (
				'codename' => 'ALK00000648',
				'name' => 'VICRYL 3-0 J305',
				'stock' => '1125',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1650 =>
			array (
				'codename' => 'OBT00000223',
				'name' => 'ELOCON OINT 10 GR',
				'stock' => '955',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1651 =>
			array (
				'codename' => 'ALK00000287',
				'name' => 'FLAT ROLL R42 (15CMX200M)',
				'stock' => '10230',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1652 =>
			array (
				'codename' => 'OBT00000182',
				'name' => 'DARYAVEN 500 MG INJ',
				'stock' => '4950',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1653 =>
			array (
				'codename' => 'ALK00000119',
				'name' => 'CLASS 6 MONITORING INDICATOR STRIP(211-243)',
				'stock' => '58',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1654 =>
			array (
				'codename' => 'BBK00000075',
				'name' => 'MALARIA Pv&Pv CASETTE (FOKUS)',
				'stock' => '665',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1655 =>
			array (
				'codename' => 'OBT00000173',
				'name' => 'CRAVIT 750 MG TAB',
				'stock' => '515',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1656 =>
			array (
				'codename' => 'ALK00000503',
				'name' => 'SPALK 4 X 10 CM TANGAN BAYI',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1657 =>
			array (
				'codename' => 'BBK00000027',
				'name' => 'ANTI HCV CASETTE (FOKUS)',
				'stock' => '442',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1658 =>
			array (
				'codename' => 'ALK00000117',
				'name' => 'CICA-CARE (SILICON GEL SHEETING) 12 CM X 15 CM',
				'stock' => '10187',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1659 =>
			array (
				'codename' => 'OBT00000721',
				'name' => 'VITAMIN A 6000 IU TAB IPI (50 s)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1660 =>
			array (
				'codename' => 'BBK00000266',
				'name' => 'HYDROGEN PEROXYDA 50 % 800 ML SOL (H2O2)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1661 =>
			array (
				'codename' => 'ALK00000111',
				'name' => 'CERTOFIX DUO HFV 1220 (4167546)',
				'stock' => '11550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1662 =>
			array (
				'codename' => 'OBT00000268',
				'name' => 'FUCIDIN CREAM 5GR',
				'stock' => '535',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1663 =>
			array (
				'codename' => 'OBT00001168',
				'name' => 'DEPAKOTE 250 MG TAB',
				'stock' => '101',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1664 =>
			array (
				'codename' => 'OBT00000267',
				'name' => 'FRISIUM 10 MG TAB',
				'stock' => '46',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1665 =>
			array (
				'codename' => 'OBT00000046',
				'name' => 'ASPILET 80 MG TAB',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1666 =>
			array (
				'codename' => 'OBT00000133',
				'name' => 'CHLORAETHYL SPRAY 100 ML *',
				'stock' => '2585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1667 =>
			array (
				'codename' => 'ALK00000281',
				'name' => 'FILM DVE EP 35 X 43 CM (14 X 17 IN) ',
				'stock' => '602',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1668 =>
			array (
				'codename' => 'OBT00000162',
				'name' => 'CONCOR 2,5 MG TAB',
				'stock' => '62',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1669 =>
			array (
				'codename' => 'OBT00000043',
				'name' => 'ARICEPT EVESS 10MG TAB',
				'stock' => '414',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1670 =>
			array (
				'codename' => 'ALK00000019',
				'name' => 'AD NON REBRT 1359 / 8130 GEA',
				'stock' => '289',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1671 =>
			array (
				'codename' => 'BBK00000026',
				'name' => 'ANTI D MONOCLONAL (RH 010)',
				'stock' => '1150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1672 =>
			array (
				'codename' => 'OBT00000904',
				'name' => 'HYDROCORTISON 1% CREAM 5 GR',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1673 =>
			array (
				'codename' => 'ALK00000502',
				'name' => 'SOFTANOL 500 ML',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1674 =>
			array (
				'codename' => 'OBT00000714',
				'name' => 'PRORIS 200 MG TAB',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1675 =>
			array (
				'codename' => 'OBT00001158',
				'name' => 'TAZOCIN 4.5 GR INJ',
				'stock' => '4571',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1676 =>
			array (
				'codename' => 'ALK00000105',
				'name' => 'CAVILON SPRAY 28 ML',
				'stock' => '1790',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1677 =>
			array (
				'codename' => 'OBT00000143',
				'name' => 'CLARITIN 10 MG TAB',
				'stock' => '76',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1678 =>
			array (
				'codename' => 'ALK00000279',
				'name' => 'FILM DVE EP 20 X 25 CM (8 X 10 IN) ',
				'stock' => '222',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1679 =>
			array (
				'codename' => 'OBT00000040',
				'name' => 'ARCOXIA 120 MG FILM-COATED TAB',
				'stock' => '159',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1680 =>
			array (
				'codename' => 'ALK00000008',
				'name' => '3WAYSTOPCOCK 394995 BUNTUT#',
				'stock' => '7000000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1681 =>
			array (
				'codename' => 'ALK00001644',
				'name' => 'TAMPON VAGINAL XL',
				'stock' => '920',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1682 =>
			array (
				'codename' => 'OBT00000711',
				'name' => 'POLYCROL FORTE SYR 180 ML',
				'stock' => '374',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1683 =>
			array (
				'codename' => 'OBT00000710',
				'name' => 'PEDIALYTE 500 ML',
				'stock' => '264',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1684 =>
			array (
				'codename' => 'OBT00000076',
				'name' => 'BLOPRESS PLUS (16 MG,12.5 MG) TAB',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1685 =>
			array (
				'codename' => 'ALK00000270',
				'name' => 'FAECES CONT 60 ML PP RED NS (25161)',
				'stock' => '31',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1686 =>
			array (
				'codename' => 'OBT00000098',
				'name' => 'CATAPRES 150 MCG TAB#',
				'stock' => '64',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1687 =>
			array (
				'codename' => 'OBT00000039',
				'name' => 'AQUA PRO INJEKSI 25 ML (Water Injection)',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1688 =>
			array (
				'codename' => 'OBT00000706',
				'name' => 'MICROLAX ENEMA',
				'stock' => '197',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1689 =>
			array (
				'codename' => 'OBT00000033',
				'name' => 'APOLAR CREAM 10 GR',
				'stock' => '346',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1690 =>
			array (
				'codename' => 'OBT00000705',
				'name' => 'LIPROLAC 2.5 MG SACHET',
				'stock' => '56',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1691 =>
			array (
				'codename' => 'ALK00000102',
				'name' => 'CATHETER GENETIS - (INSEMINASI)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1692 =>
			array (
				'codename' => 'OBT00000701',
				'name' => 'CURCUMA PLUS SYRUP 60 ML',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1693 =>
			array (
				'codename' => 'OBT00000097',
				'name' => 'CATAPRES 0,15 MG/ML INJ',
				'stock' => '775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1694 =>
			array (
				'codename' => 'ALK00000098',
				'name' => 'CANUL (KARMAN) CURRET NO.7',
				'stock' => '372',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1695 =>
			array (
				'codename' => 'ALK00000499',
				'name' => 'SOFSILK 2-0 GS833',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1696 =>
			array (
				'codename' => 'OBT00000031',
				'name' => 'ANGELIQ *',
				'stock' => '4755',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1697 =>
			array (
				'codename' => 'BBK00000045',
				'name' => 'CELLCLEAN AUTO (CF579595)',
				'stock' => '825',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1698 =>
			array (
				'codename' => 'A2947',
				'name' => 'CORDARON INJEKSI',
				'stock' => '401',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1699 =>
			array (
				'codename' => 'OBT00000028',
				'name' => 'AMOXSAN FORTE 250 MG/5 ML DRY SYR 60 ML',
				'stock' => '342',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1700 =>
			array (
				'codename' => 'ALK00000651',
				'name' => 'LIMBO BREATHING CIRCUIT FOR VENTILATOR (VJNXXXCX)',
				'stock' => '2475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1701 =>
			array (
				'codename' => 'ALK00001544',
				'name' => 'PAKET STERIL LAPARATOMY SPONGES X-RAY 23 X 23 CM (ISI 1) ',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1702 =>
			array (
				'codename' => 'OBT00000264',
				'name' => 'FREGO 10 MG TAB',
				'stock' => '81',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1703 =>
			array (
				'codename' => 'OBT00000021',
				'name' => 'AMARYL-M 2 MG/500 MG TAB',
				'stock' => '57',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1704 =>
			array (
				'codename' => 'OBT00000697',
				'name' => 'LINCOMYCIN 500 MG CAP (GEN)',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1705 =>
			array (
				'codename' => 'OBT00000696',
				'name' => 'GEMFIBROZIL 300 MG CAP',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1706 =>
			array (
				'codename' => 'OBT00000090',
				'name' => 'BUSCOPAN PLUS TAB#',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1707 =>
			array (
				'codename' => 'ALK00000678',
				'name' => 'DARYANTULE',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1708 =>
			array (
				'codename' => 'OBT00000690',
				'name' => 'PREDNISONE 5 MG TAB (100 s)',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1709 =>
			array (
				'codename' => 'CGN00000003',
				'name' => 'KN-PAKET BIPOLAR CEMENTLESS',
				'stock' => '320000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1710 =>
			array (
				'codename' => 'ALK00000096',
				'name' => 'CADD RESERVOIR CASSETTE 100 ML (21-7002-24)',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1711 =>
			array (
				'codename' => 'ALK00000269',
				'name' => 'FACE MASK NO. 5 INTERSUGICAL (1125)',
				'stock' => '1540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1712 =>
			array (
				'codename' => 'OBT00000019',
				'name' => 'ALLORIS 10 MG TAB',
				'stock' => '49',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1713 =>
			array (
				'codename' => 'OBT00000020',
				'name' => 'AMARYL 2 MG TAB',
				'stock' => '57',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1714 =>
			array (
				'codename' => 'ALK00000881',
				'name' => 'LD URETERAL STENT 4.7 FR-26 CM WITH GW (URO-4726-28CS)',
				'stock' => '7150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1715 =>
			array (
				'codename' => 'OBT00000687',
				'name' => 'OMEPRAZOLE 20 MG CAP (30 s)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1716 =>
			array (
				'codename' => 'OBT00000072',
				'name' => 'BISOVELL 5 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1717 =>
			array (
				'codename' => 'BBK00000197',
				'name' => 'LYSERCELL WPC (XN CS 412 800)*',
				'stock' => '12320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1718 =>
			array (
				'codename' => 'ALK00000266',
				'name' => 'EYE PAD BILIBAND ',
				'stock' => '1059',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1719 =>
			array (
				'codename' => 'ALK00000092',
				'name' => 'BREATHING CIRCUIT PAED 2142 UNIFLOW',
				'stock' => '1771',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1720 =>
			array (
				'codename' => 'OBT00000070',
				'name' => 'BISOLVON 8 MG TAB',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1721 =>
			array (
				'codename' => 'OBT00000063',
				'name' => 'BETADIN VAG DOUCHE 10% 100 ML',
				'stock' => '518',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1722 =>
			array (
				'codename' => 'ALK00000087',
				'name' => 'BOWIE DICK REFILL STRIPS (211-111) ENS',
				'stock' => '481',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1723 =>
			array (
				'codename' => 'ALK00000085',
				'name' => 'BONGROS HA 5CC',
				'stock' => '31465',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1724 =>
			array (
				'codename' => 'ALK00000645',
				'name' => 'VICRYL 2-0 W9121',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1725 =>
			array (
				'codename' => 'OBT00000263',
				'name' => 'FORTANEST 5 MG/ 5 ML INJ',
				'stock' => '850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1726 =>
			array (
				'codename' => 'OBT00000014',
				'name' => 'AERIUS D-12 TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1727 =>
			array (
				'codename' => 'ALK00001543',
				'name' => 'PAKET STERIL LAPARATOMY SPONGES X-RAY 170 X 12 CM (ISI 1) ',
				'stock' => '319',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1728 =>
			array (
				'codename' => 'OBT00000260',
				'name' => 'FOLAVIT 400MCG TAB',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1729 =>
			array (
				'codename' => 'OBT00000062',
				'name' => 'BESTALIN 25 MG TAB',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1730 =>
			array (
				'codename' => 'OBT00000678',
				'name' => 'IBUPROFEN 400 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1731 =>
			array (
				'codename' => 'CGN-A5804',
				'name' => 'ABBOTIC XL TAB - 1',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1732 =>
			array (
				'codename' => 'OBT00000059',
				'name' => 'BARACLUDE ORAL 0,5 MG TAB',
				'stock' => '801',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1733 =>
			array (
				'codename' => 'OBT00001348',
				'name' => 'SAGESTAM EYE OINT',
				'stock' => '365',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1734 =>
			array (
				'codename' => 'ALK00000643',
				'name' => 'SURGIPRO 3-0 SP684',
				'stock' => '990',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1735 =>
			array (
				'codename' => 'ALK00000634',
				'name' => 'PROLENE 2-0 8685H',
				'stock' => '1055',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1736 =>
			array (
				'codename' => 'OBT00001347',
				'name' => 'SAGESTAM EYE/EAR DROP',
				'stock' => '288',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1737 =>
			array (
				'codename' => 'OBT00000676',
				'name' => 'GRISEOFULVIN 125 MG TAB ',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1738 =>
			array (
				'codename' => 'OBT00000013',
				'name' => 'AERIUS 5 MG FILM-COATED TAB',
				'stock' => '89',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1739 =>
			array (
				'codename' => 'OBT00000010',
				'name' => 'ADONA AC 17 10 MG TAB#',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1740 =>
			array (
				'codename' => 'ALK00000642',
				'name' => 'SURGIPRO 2-0 SP685',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1741 =>
			array (
				'codename' => 'ALK00001686',
				'name' => 'SENSI GLOVES LARGE',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1742 =>
			array (
				'codename' => 'OBT00000673',
				'name' => 'FLUCONAZOLE 2 MG/ML INF 100 ML',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1743 =>
			array (
				'codename' => 'OBT00000051',
				'name' => 'AVELOX 400 MG TAB',
				'stock' => '590',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1744 =>
			array (
				'codename' => 'OBT00000045',
				'name' => 'ASPAR-K 300 MG FILM-COATED TABLET',
				'stock' => '24',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1745 =>
			array (
				'codename' => 'ALK00000256',
				'name' => 'ETT PROF CLEAR 7 (100-199-070) PORTEX',
				'stock' => '993',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1746 =>
			array (
				'codename' => 'OBT00001344',
				'name' => 'AVIGAN TABLET',
				'stock' => '600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1747 =>
			array (
				'codename' => 'OBT00001342',
				'name' => 'ROSUVASTATIN 20 MG TABLET',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1748 =>
			array (
				'codename' => 'OBT00000042',
				'name' => 'ARCOXIA 90 MG FILM-COATED TAB',
				'stock' => '145',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1749 =>
			array (
				'codename' => 'OBT00000663',
				'name' => 'CEFTRIAXONE 1 GR INJ (2 s)',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1750 =>
			array (
				'codename' => 'OBT00000037',
				'name' => 'AQUA 1 L WIDATRA',
				'stock' => '160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1751 =>
			array (
				'codename' => 'OBT00001337',
				'name' => 'TRIDEX 27A INFUS 500 ML',
				'stock' => '216',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1752 =>
			array (
				'codename' => 'OBT00001333',
				'name' => 'TB VIT 6 TABLET',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1753 =>
			array (
				'codename' => 'OBT00000035',
				'name' => 'APROVEL 150 MG TAB',
				'stock' => '131',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1754 =>
			array (
				'codename' => 'ALK00000641',
				'name' => 'V-LOC 90 DEVICE 3-0 P-12 (VLOCM0024)',
				'stock' => '7150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1755 =>
			array (
				'codename' => 'OBT00000662',
				'name' => 'CEFOTAXIME 1 GRAM INJ (2 s)',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1756 =>
			array (
				'codename' => 'OBT00001328',
				'name' => 'FORBETES 500 XR TABLET',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1757 =>
			array (
				'codename' => 'OBT00000032',
				'name' => 'ANGIOTEN 50 MG TAB',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1758 =>
			array (
				'codename' => 'OBT00000029',
				'name' => 'AMOXSAN PAED 100 MG/ML DROP 15 ML',
				'stock' => '168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1759 =>
			array (
				'codename' => 'BBK00000003',
				'name' => 'CONTAINER URIEN STERIL KUNING',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1760 =>
			array (
				'codename' => 'OBT00000258',
				'name' => 'FLUIMUCIL 600 EFFERVESENT TAB',
				'stock' => '144',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1761 =>
			array (
				'codename' => 'OBT00000256',
				'name' => 'FLUIMUCIL 100 MG/5 ML DRY SYR 75 ML',
				'stock' => '588',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1762 =>
			array (
				'codename' => 'ALK00001542',
				'name' => 'PAKET STERIL KASSA  X-RAY 10 X 10 CM (ISI 10) ',
				'stock' => '289',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1763 =>
			array (
				'codename' => 'ALK00000639',
				'name' => 'SAFIL 1 HR48',
				'stock' => '1417',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1764 =>
			array (
				'codename' => 'ALK00000638',
				'name' => 'MONOSYN QUICK 2-0 HR 37S UNDYED 90CM (C0025071)',
				'stock' => '857',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1765 =>
			array (
				'codename' => 'ALK00000637',
				'name' => 'PROLENE 5-0 8710H',
				'stock' => '1639',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1766 =>
			array (
				'codename' => 'ALK00001539-1',
				'name' => 'PAKET STERIL KASSA NON X-RAY 6 X 6 CM (ISI 10) ',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1767 =>
			array (
				'codename' => 'ALK00001540',
				'name' => 'PAKET STERIL KASSA NON X-RAY 7,5 X 7,5 CM (ISI 5)',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1768 =>
			array (
				'codename' => 'ALK00001541',
				'name' => 'PAKET STERIL KASSA X-RAY 7,5 X 7,5 CM (ISI 10)',
				'stock' => '159',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1769 =>
			array (
				'codename' => 'OBT00000659',
				'name' => 'CEFADROXIL 500 MG CAP GEN',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1770 =>
			array (
				'codename' => 'ALK00000630',
				'name' => 'PLAIN 2-0 1872T',
				'stock' => '860',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1771 =>
			array (
				'codename' => 'OBT00000015',
				'name' => 'ALBENDAZOLE 400 MG TAB KUNYAH ',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1772 =>
			array (
				'codename' => 'OBT00000655',
				'name' => 'ATROPINE 0,25 MG/1 ML INJ',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1773 =>
			array (
				'codename' => 'OBT00000255',
				'name' => 'FLUIMUCIL 10% 300MG/3ML INJ',
				'stock' => '572',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1774 =>
			array (
				'codename' => 'ALK00000363',
				'name' => 'HMEF FILTER WORK',
				'stock' => '666',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1775 =>
			array (
				'codename' => 'OBT00000253',
				'name' => 'FLEET PHOSPHOSODA SOLUTION 45 ML',
				'stock' => '726',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1776 =>
			array (
				'codename' => 'ALK00001539',
				'name' => 'PAKET STERIL KASSA NON X-RAY 6 X 6 CM (ISI 5) ',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1777 =>
			array (
				'codename' => 'ALK00000253',
				'name' => 'ETT PORTEX SACETT NO. 8',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1778 =>
			array (
				'codename' => 'ALK00000626',
				'name' => 'PED NON REBREATHING MASK 1130/3678',
				'stock' => '688',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1779 =>
			array (
				'codename' => 'OBT00000008',
				'name' => 'ADALAT OROS 20 MG TAB#',
				'stock' => '67',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1780 =>
			array (
				'codename' => 'ALK00000635',
				'name' => 'PROLENE 2-0 W8689T',
				'stock' => '1390',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1781 =>
			array (
				'codename' => 'ALK00000371',
				'name' => 'HUIBRETGTSE SINGLE LUMEN NEEDLE KNIFE (HPC-2)',
				'stock' => '44880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1782 =>
			array (
				'codename' => 'ALK00001538',
				'name' => 'PAKET STERIL KASSA NON X-RAY 10 X 10 CM (ISI 10) ',
				'stock' => '267',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1783 =>
			array (
				'codename' => 'ALK00000006',
				'name' => '11MM VERSAPORT PLUS V2 W/FIXATION (179095PF) NEW',
				'stock' => '15400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1784 =>
			array (
				'codename' => 'ALK00000076',
				'name' => 'BLADES DERMATOME D-80(5D80BL10)',
				'stock' => '2251',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1785 =>
			array (
				'codename' => 'OBT00000653',
				'name' => 'AMLODIPIN 10 MG TAB ',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1786 =>
			array (
				'codename' => 'OBT00000652',
				'name' => 'AMITRIPTYLINE 25 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1787 =>
			array (
				'codename' => 'OBT00000896',
				'name' => 'TRAMAL 100MG/2ML INJ 2ML',
				'stock' => '392',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1788 =>
			array (
				'codename' => 'ALK00001553',
				'name' => 'PAKET STERIL ROL TAMPON 3 CM (ISI 1) ',
				'stock' => '286',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1789 =>
			array (
				'codename' => 'ALK00000633',
				'name' => 'PROLENE 3-0 W8021T',
				'stock' => '1170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1790 =>
			array (
				'codename' => 'OBT00000005',
				'name' => 'ACRAN 50 MG/2 ML INJ#',
				'stock' => '224',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1791 =>
			array (
				'codename' => 'ALK00000488',
				'name' => 'SENSI MAXTER EXAM (S) ONEMED - NON STERIL',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1792 =>
			array (
				'codename' => 'OBT00000007',
				'name' => 'ACTOS 30 MG TABLET',
				'stock' => '114',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1793 =>
			array (
				'codename' => 'ALK00001537',
				'name' => 'PAKET STERIL KASSA NON X-RAY 10 X 10 CM (ISI 5) ',
				'stock' => '143',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1794 =>
			array (
				'codename' => 'ALK00000251',
				'name' => 'ETT PORTEX SACETT NO. 7 (REF. 100/189/070)',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1795 =>
			array (
				'codename' => 'OBT00000003',
				'name' => 'ABBOTIC GRANULE 250 MG/5 ML DRY SYR 50 ML',
				'stock' => '2368',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1796 =>
			array (
				'codename' => 'OBT00000004',
				'name' => 'ABBOTIC XL 500 MG FILM TAB',
				'stock' => '427',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1797 =>
			array (
				'codename' => 'OBT00000895',
				'name' => 'RANTIN 50 MG/2 ML INJEKSI#',
				'stock' => '209',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1798 =>
			array (
				'codename' => 'ALK00000632',
				'name' => 'PROLENE 3-0 (W8684)',
				'stock' => '1098',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1799 =>
			array (
				'codename' => 'ALK00000338',
				'name' => 'GUIDING CATHETER JR 3.5-6 FR CORDIS (67008000)',
				'stock' => '41745',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1800 =>
			array (
				'codename' => 'OBT00000250',
				'name' => 'FLAGYL SYRUP 60 ML',
				'stock' => '585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1801 =>
			array (
				'codename' => 'OBT00000002',
				'name' => 'ABBOTIC GRANULE 125 MG/5 ML DRY SYR 60 ML',
				'stock' => '1633',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1802 =>
			array (
				'codename' => 'OBT00001311',
				'name' => 'CORTIDEX 5 MG/ML INJEKSI',
				'stock' => '62',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1803 =>
			array (
				'codename' => 'OBT00000651',
				'name' => 'AMINOPHYLLINE 24 MG/ML INJ 10 ML',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1804 =>
			array (
				'codename' => 'ALK00000074',
				'name' => 'BLADED MAMMOTOME EX PROBE (WITH TUBE SET) 11 G',
				'stock' => '70400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1805 =>
			array (
				'codename' => 'OBT00000650',
				'name' => 'ACYCLOVIR 5% CR 5 GR',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1806 =>
			array (
				'codename' => 'OBT00000889',
				'name' => 'RECOFOL-N 10 MG/ML INJ 20 ML',
				'stock' => '940',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1807 =>
			array (
				'codename' => 'BBK00000245',
				'name' => 'O2 LIQUID',
				'stock' => '52',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1808 =>
			array (
				'codename' => 'ALK00000248',
				'name' => 'ETT PLAIN 4 (100-111-040) PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1809 =>
			array (
				'codename' => 'OBT00000888',
				'name' => 'DEXAMETHASON 5 MG/ML INJ (100s)',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1810 =>
			array (
				'codename' => 'OBT00000648',
				'name' => 'XYLOCAIN JELLY 2 % 10 GR',
				'stock' => '581',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1811 =>
			array (
				'codename' => 'ALK00000618',
				'name' => 'FLAT ROLL R45 (30CMX300M)',
				'stock' => '102',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1812 =>
			array (
				'codename' => 'OBT00000647',
				'name' => 'XYLOCAIN 2% PDF INJ 20 ML#',
				'stock' => '604',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1813 =>
			array (
				'codename' => 'BBK00000244',
				'name' => 'NITROUS OXIDE (N2O) /20 KG (SAMATOR)',
				'stock' => '1020',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1814 =>
			array (
				'codename' => 'OBT00000645',
				'name' => 'VAKSIN VARIVAX INJ 0.5 ML',
				'stock' => '4863',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1815 =>
			array (
				'codename' => 'OBT00000887',
				'name' => 'VITAMIN K TAB/phytomenadione',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1816 =>
			array (
				'codename' => 'OBT00000643',
				'name' => 'VAKSIN TYPHIM 0,025 MG/0,5 ML',
				'stock' => '1999',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1817 =>
			array (
				'codename' => 'BBK00000243',
				'name' => 'CARBONDIOKSIDA ( CO2 ) 4 KG MR',
				'stock' => '66',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1818 =>
			array (
				'codename' => 'OBT00001310',
				'name' => 'MERONEM 0,5 GRAM INJEKSI',
				'stock' => '3570',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1819 =>
			array (
				'codename' => 'BBK00000242',
				'name' => 'WRIGHT 95221 BM 500ML (MERCK)',
				'stock' => '10560',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1820 =>
			array (
				'codename' => 'ALK00000327',
				'name' => 'GUDEL 0 (5,5) GREY INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1821 =>
			array (
				'codename' => 'OBT00001308',
				'name' => 'DEXTAMINE TABLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1822 =>
			array (
				'codename' => 'OBT00000876',
				'name' => 'CYMEVEN 500 MG INJ',
				'stock' => '13798',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1823 =>
			array (
				'codename' => 'OBT00000641',
				'name' => 'VAKSIN ROTATEQ ORAL SUSP 2 ML',
				'stock' => '2205',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1824 =>
			array (
				'codename' => 'OBT00000640',
				'name' => 'VAKSIN ROTARIX ORAL SUSP 1,5 ML',
				'stock' => '2633',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1825 =>
			array (
				'codename' => 'BBK00000240',
				'name' => 'VIDAS TSH',
				'stock' => '40700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1826 =>
			array (
				'codename' => 'OBT00001307',
				'name' => 'TRILAC 40 MG/ML INJEKSI',
				'stock' => '900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1827 =>
			array (
				'codename' => 'OBT00000870',
				'name' => 'COLSANSETIN 250MG CAP',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1828 =>
			array (
				'codename' => 'ALK00001629',
				'name' => 'PUR UMBILICAL CATHETER 3.5 FR-40 CM (1270.03)',
				'stock' => '3570',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1829 =>
			array (
				'codename' => 'BBK00000237',
				'name' => 'VIDAS T4 (30404)',
				'stock' => '41360',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1830 =>
			array (
				'codename' => 'BBK00000235',
				'name' => 'VIDAS HIV DUO ULTRA (30443)',
				'stock' => '72600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1831 =>
			array (
				'codename' => 'OBT00000864',
				'name' => 'BRIDION 100 MG/ML INJ 2 ML',
				'stock' => '18370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1832 =>
			array (
				'codename' => 'OBT00000639',
				'name' => 'VAKSIN MMR II INJ 0,5 ML',
				'stock' => '2898',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1833 =>
			array (
				'codename' => 'ALK00000068',
				'name' => 'BIOSYN 3-0 CUTTING (SM-693)',
				'stock' => '1628',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1834 =>
			array (
				'codename' => 'OBT00000638',
				'name' => 'VAKSIN IPD PREVENAR',
				'stock' => '6783',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1835 =>
			array (
				'codename' => 'OBT00001306',
				'name' => 'ELIDEL CREAM 1% 10 GRAM',
				'stock' => '2220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1836 =>
			array (
				'codename' => 'OBT00000862',
				'name' => 'FLAMICORT INJ 40 MG/ML ( I.M )',
				'stock' => '848',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1837 =>
			array (
				'codename' => 'ALK00000325',
				'name' => 'GRIPPER PLUS 20G X 75 NEEDLELES (21-2965-24)',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1838 =>
			array (
				'codename' => 'ALK00000484',
				'name' => 'SENSI GLOVES M',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1839 =>
			array (
				'codename' => 'OBT00001305',
				'name' => 'VIP ALBUMIN 500 MG CAPSUL',
				'stock' => '73',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1840 =>
			array (
				'codename' => 'BBK00000233',
				'name' => 'VIDAS CEA 30412/30453',
				'stock' => '99000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1841 =>
			array (
				'codename' => 'ALK00000244',
				'name' => 'ETT PLAIN 2 (100-111-020)PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1842 =>
			array (
				'codename' => 'OBT00000855',
				'name' => 'TRENTAL 400 MG TAB',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1843 =>
			array (
				'codename' => 'BBK00000232',
				'name' => 'VIDAS ANTI HBS TOTAL',
				'stock' => '69564',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1844 =>
			array (
				'codename' => 'ALK00000067',
				'name' => 'BIOPSI RADIAL JAW 4 SC 240 CM (M00513403)',
				'stock' => '2640',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1845 =>
			array (
				'codename' => 'OBT00001293',
				'name' => 'NIFLEC POWDER 137,155G',
				'stock' => '1760',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1846 =>
			array (
				'codename' => 'OBT00000902',
				'name' => 'METACOSFAR 320 MG/ML INJ 50 ML',
				'stock' => '4400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1847 =>
			array (
				'codename' => 'ALK00000308',
				'name' => 'FOLLEY CATHETER 2WAY 22 RUSCH',
				'stock' => '230',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1848 =>
			array (
				'codename' => 'OBT00000246',
				'name' => 'FG TROCHES LOZENGES TAB (300 s)',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1849 =>
			array (
				'codename' => 'BBK00000231',
				'name' => 'VIDAS ANTI HAV IgM (30307)',
				'stock' => '53900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1850 =>
			array (
				'codename' => 'OBT00001302',
				'name' => 'SALOFALK ENEMA 4 GR',
				'stock' => '1742',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1851 =>
			array (
				'codename' => 'BBK00000203',
				'name' => 'MYCROSYPH TPHA 200(TPHA TEST KIT)-(PRIMACO)',
				'stock' => '13750',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1852 =>
			array (
				'codename' => 'ALK00000629',
				'name' => 'T-SCRUB BRUSH T 49',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1853 =>
			array (
				'codename' => 'ALK00000241',
				'name' => 'ETT NKK 7 PORTEX (100-110-070)',
				'stock' => '5460',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1854 =>
			array (
				'codename' => 'OBT00001287',
				'name' => 'ATORVASTATIN 10 MG TAB',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1855 =>
			array (
				'codename' => 'ALK00000240',
				'name' => 'ETT NKK 6,5 PORTEX',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1856 =>
			array (
				'codename' => 'BBK00000228',
				'name' => 'UX II SHEATH (20LITER) BS503938',
				'stock' => '69894',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1857 =>
			array (
				'codename' => 'ALK00000628',
				'name' => 'SKIN MARKER REGULAR TIP (SM-2)',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1858 =>
			array (
				'codename' => 'OBT00000845',
				'name' => 'ACTILYSE 50 MG INF',
				'stock' => '89763',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1859 =>
			array (
				'codename' => 'ALK00001648',
				'name' => 'CARBON STEEL SCALPEL #11',
				'stock' => '3201',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1860 =>
			array (
				'codename' => 'OBT00001299',
				'name' => 'CAIRAN MIRIWASH 500 ML',
				'stock' => '1250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1861 =>
			array (
				'codename' => 'ALK00000003',
				'name' => 'DISP ONE STEP CANNULA (1272.ED206)',
				'stock' => '12514',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1862 =>
			array (
				'codename' => 'OBT00001304',
				'name' => 'DIGOXIN 0,25 MG TAB ',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1863 =>
			array (
				'codename' => 'ALK00000275',
				'name' => 'FEEDING TUBE 5 FR - 40 CM TERUMO',
				'stock' => '424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1864 =>
			array (
				'codename' => 'ALK00000483',
				'name' => 'SAFIL 4-0 TAPER (HR 17)',
				'stock' => '1173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1865 =>
			array (
				'codename' => 'ALK00000481',
				'name' => 'SAFIL 2-0 HR 37 S (C1048595)',
				'stock' => '1308',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1866 =>
			array (
				'codename' => 'ALK00000285',
				'name' => 'FLAT ROLL R40 (7,5CMX200M)',
				'stock' => '5446',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1867 =>
			array (
				'codename' => 'OBT00000243',
				'name' => 'FELDENE FLASH  20 MG CAPLET',
				'stock' => '185',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1868 =>
			array (
				'codename' => 'OBT00000242',
				'name' => 'FELDENE 0,5% GEL 25 GR',
				'stock' => '1325',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1869 =>
			array (
				'codename' => 'OBT00000901',
				'name' => 'NUPOFEL 10MG/ML INJEKSI',
				'stock' => '935',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1870 =>
			array (
				'codename' => 'OBT00001303',
				'name' => 'SALOFALK 1,5 GR SACHET',
				'stock' => '500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1871 =>
			array (
				'codename' => 'BBK00000227',
				'name' => 'UX II SEARCH-SED (29ML) BD563893',
				'stock' => '22880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1872 =>
			array (
				'codename' => 'OBT00001279',
				'name' => 'ESOMEPRAZOLE 20 MG TAB',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1873 =>
			array (
				'codename' => 'ALK00000477',
				'name' => 'SAFETY BOX OBOR SAVE',
				'stock' => '170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1874 =>
			array (
				'codename' => 'ALK00000472',
				'name' => 'PROLENE 6-0 W8706',
				'stock' => '1771',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1875 =>
			array (
				'codename' => 'OBT00000900',
				'name' => 'NOTRIXUM 50 MG INJEKSI',
				'stock' => '825',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1876 =>
			array (
				'codename' => 'OBT00000238',
				'name' => 'FARGOXIN 0,25 MG/ML INJ#',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1877 =>
			array (
				'codename' => 'OBT00000837',
				'name' => 'PLASMINEX 500 MG TAB',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1878 =>
			array (
				'codename' => 'BBK00000223',
				'name' => 'URIC ACID ( COBAS 3183807190 )',
				'stock' => '14216',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1879 =>
			array (
				'codename' => 'OBT00001272',
				'name' => 'ESTAZOR 250 MG CAP',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1880 =>
			array (
				'codename' => 'BBK00000174',
				'name' => 'D10 A1C REORDEPACK 400 T/D10 HBA1C BIO RAD (120-00949)',
				'stock' => '308000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1881 =>
			array (
				'codename' => 'OBT00001301',
				'name' => 'SALOFALK 500 MG SUPPOSITORIA',
				'stock' => '311',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1882 =>
			array (
				'codename' => 'OBT00000236',
				'name' => 'FAKTU OINTMENT 20 GR#',
				'stock' => '1082',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1883 =>
			array (
				'codename' => 'OBT00001267',
				'name' => 'VICTOZA 6 MG/ML - 3 ML PREFILLED PEN',
				'stock' => '9229',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1884 =>
			array (
				'codename' => 'BBK00000221',
				'name' => 'UF II CONTROL (47ML) 6404115',
				'stock' => '14812',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1885 =>
			array (
				'codename' => 'OBT00001300',
				'name' => 'NATUR-E CAPSUL',
				'stock' => '8',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1886 =>
			array (
				'codename' => 'BBK00000220',
				'name' => 'TUBEX TF 10-201 36 TEST',
				'stock' => '39886',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1887 =>
			array (
				'codename' => 'ALK00000615',
				'name' => 'AQUASONIC GEL PARKER 250ML',
				'stock' => '656',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1888 =>
			array (
				'codename' => 'ALK00000273',
				'name' => 'FEEDING TUBE 3.5 FR - 35 CM TERUMO',
				'stock' => '424',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1889 =>
			array (
				'codename' => 'ALK00000471',
				'name' => 'PROLENE 5-0 8710H',
				'stock' => '1639',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1890 =>
			array (
				'codename' => 'ALK00001677',
				'name' => 'POLYSORB 3-0 SL693',
				'stock' => '980',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1891 =>
			array (
				'codename' => 'BBK00000219',
				'name' => 'TSH3UL CENTAUR (10282378)',
				'stock' => '71690',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1892 =>
			array (
				'codename' => 'BBK00000218',
				'name' => 'TRIGLYCERIDE ( COBAS 20767107322 )',
				'stock' => '14458',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1893 =>
			array (
				'codename' => 'OBT00001258',
				'name' => 'RIVANOL  200 ML',
				'stock' => '99',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1894 =>
			array (
				'codename' => 'ALK00001676',
				'name' => 'THORAMETRIX BIOMETRIX NC-5514',
				'stock' => '13500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1895 =>
			array (
				'codename' => 'OBT00001276',
				'name' => 'TREMFYA 100 MG/1 ML PFS',
				'stock' => '410000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1896 =>
			array (
				'codename' => 'BBK00000216',
				'name' => 'TOXOPLASMA IG M ( VIDAS 30202 )',
				'stock' => '53900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1897 =>
			array (
				'codename' => 'BBK00000215',
				'name' => 'TOXOPLASMA IG G II ( VIDAS 30210 )',
				'stock' => '56650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1898 =>
			array (
				'codename' => 'BBK00000185',
				'name' => 'HDL-C GEN-4 COBAS C INTEGRA (7528566190)',
				'stock' => '107128',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1899 =>
			array (
				'codename' => 'OBT00000897',
				'name' => 'TRAMAL 50 MG/ML INJ 1 ML',
				'stock' => '260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1900 =>
			array (
				'codename' => 'ALK00000260',
				'name' => 'EXTENSION TUBE 150CM JMS/PVC',
				'stock' => '373',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1901 =>
			array (
				'codename' => 'ALK00000257',
				'name' => 'ETT PROF CLEAR 7,5 (100-188-199-075)',
				'stock' => '993',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1902 =>
			array (
				'codename' => 'OBT00000865',
				'name' => 'BUNASCAN  SPINAL 0.5% HEAVY INJ',
				'stock' => '660',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1903 =>
			array (
				'codename' => 'ALK00001675',
				'name' => 'PAKET STERIL DUCK BOLONG 40 CM X 40 CM',
				'stock' => '997',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1904 =>
			array (
				'codename' => 'OBT00000827',
				'name' => 'TRUVAZ 40 MG TAB',
				'stock' => '173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1905 =>
			array (
				'codename' => 'ALK00000058',
				'name' => 'BAROVAC PS SS 100 ML',
				'stock' => '4858',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1906 =>
			array (
				'codename' => 'ALK00000054',
				'name' => 'BALL ELECTRODA (150-165)',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1907 =>
			array (
				'codename' => 'BBK00000208',
				'name' => 'RUBELLA M ( VIDAS 30214 )',
				'stock' => '53900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1908 =>
			array (
				'codename' => 'ALK00000245',
				'name' => 'ETT PLAIN 2,5 (100-111-025) PORTEX',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1909 =>
			array (
				'codename' => 'ALK00001674',
				'name' => 'PAKET STERIL DUCK ALAS 40 CM X 40 CM',
				'stock' => '997',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1910 =>
			array (
				'codename' => 'ALK00000048',
				'name' => 'ASKINA SOFT CLEAR 9 X 25',
				'stock' => '378',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1911 =>
			array (
				'codename' => 'OBT00000822',
				'name' => 'CITICOLINE 125 MG/ML INJ 2 ML (10s)',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1912 =>
			array (
				'codename' => 'BBK00000180',
				'name' => 'GGT (COBAS 3002721122)',
				'stock' => '17612',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1913 =>
			array (
				'codename' => 'OBT00001198',
				'name' => 'ALOCLAIR PLUS ORAL RINSE (GARGLE)',
				'stock' => '908',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1914 =>
			array (
				'codename' => 'OBT00000819',
				'name' => 'SPIRONOLACTONE 25 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1915 =>
			array (
				'codename' => 'BBK00000206',
				'name' => 'REAGENT PACK ELEKTROLIT CORNLEY-KLITE5',
				'stock' => '24200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1916 =>
			array (
				'codename' => 'ALK00000624',
				'name' => 'STERILIZATION WRAP 140 X 180 (SKS-1180B) BLUE',
				'stock' => '323',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1917 =>
			array (
				'codename' => 'BBK00000204',
				'name' => 'PROBE WASH 3(CENTAUR)',
				'stock' => '46464',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1918 =>
			array (
				'codename' => 'OBT00001189',
				'name' => 'ACNE FELDIN LOTION 110 ML',
				'stock' => '327',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1919 =>
			array (
				'codename' => 'BBK00000169',
				'name' => 'CK(COBAS)-(7190794190)',
				'stock' => '18909',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1920 =>
			array (
				'codename' => 'ALK00001673',
				'name' => 'PAKET STERIL TAMPON VAGINAL XL (ISI 3)',
				'stock' => '2789',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1921 =>
			array (
				'codename' => 'ALK00000255',
				'name' => 'ETT PROF CLEAR 6.5 (100-199-065) PORTEX',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1922 =>
			array (
				'codename' => 'BBK00000201',
				'name' => 'MICROPLATE NEONATAL G6PD ASSAY (532-6100)',
				'stock' => '71500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1923 =>
			array (
				'codename' => 'BBK00000156',
				'name' => 'ANAEROBIC INDICATOR (BR0055B)-(DIPA)',
				'stock' => '11990',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1924 =>
			array (
				'codename' => 'OBT00001183',
				'name' => 'NIMOTOP INFUS',
				'stock' => '2981',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1925 =>
			array (
				'codename' => 'BBK00000196',
				'name' => 'LYSERCELL WNR 5 LTR (ZPPBL121531)',
				'stock' => '49500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1926 =>
			array (
				'codename' => 'OBT00001176',
				'name' => 'TRAMAL 50 MG CAP',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1927 =>
			array (
				'codename' => 'BBK00000194',
				'name' => 'LYPHOCHECK IMMUNOASSAY PLUS CONTROL LEVEL 1.2.3 (370)',
				'stock' => '66935',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1928 =>
			array (
				'codename' => 'BBK00000192',
				'name' => 'LDH (COBAS) (20767123322)',
				'stock' => '14583',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1929 =>
			array (
				'codename' => 'BBK00000190',
				'name' => 'LAMP HALOGEN JB12V24WF6 (CS 2100)',
				'stock' => '23936',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1930 =>
			array (
				'codename' => 'ALK00001671',
				'name' => 'PAKET STERIL TAMPON VAGINAL M (ISI 3)',
				'stock' => '1931',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1931 =>
			array (
				'codename' => 'ALK00001672',
				'name' => 'PAKET STERIL TAMPON VAGINAL L (ISI 3)',
				'stock' => '2327',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1932 =>
			array (
				'codename' => 'BBK00000189',
				'name' => 'KIT TB STAIN KIT ZN (BD 212520)',
				'stock' => '10043',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1933 =>
			array (
				'codename' => 'BBK00000187',
				'name' => 'IgE ALLEISASCREEN (PANEL ALERGI ATOPI)',
				'stock' => '132000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1934 =>
			array (
				'codename' => 'ALK00000036',
				'name' => 'APRON WHITE AP88',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1935 =>
			array (
				'codename' => 'BBK00000181',
				'name' => 'GIEMSA 98750 BM 500ML (MERCK)',
				'stock' => '19203',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1936 =>
			array (
				'codename' => 'OBT00000894',
				'name' => 'REGIVELL HEAVY 5 MG INJ 4 ML',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1937 =>
			array (
				'codename' => 'ALK00001669',
				'name' => 'CIDEX OPA TEST STRIP',
				'stock' => '160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1938 =>
			array (
				'codename' => 'BBK00000179',
				'name' => 'FLUOROCELL WPC (XN BU306227)',
				'stock' => '18700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1939 =>
			array (
				'codename' => 'OBT00000891',
				'name' => 'BRAUNOL 100ML',
				'stock' => '448',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1940 =>
			array (
				'codename' => 'OBT00001250',
				'name' => 'ZEMYC 150 MG CAP',
				'stock' => '702',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1941 =>
			array (
				'codename' => 'OBT00000890',
				'name' => 'BETADIN SOL 10% 60 ML',
				'stock' => '422',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1942 =>
			array (
				'codename' => 'OBT00001247',
				'name' => 'CANDESARTAN 16 MG TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1943 =>
			array (
				'codename' => 'ALK00000032',
				'name' => 'ANGIO DRAPE AG-0103B (HOGY)',
				'stock' => '4347',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1944 =>
			array (
				'codename' => 'ALK00000031',
				'name' => 'AMBU NEUROLINE 710',
				'stock' => '229',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1945 =>
			array (
				'codename' => 'OBT00000776',
				'name' => 'LAXOBERON DROP 10 ML',
				'stock' => '794',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1946 =>
			array (
				'codename' => 'ALK00000027',
				'name' => 'ALLEVYN ADHESIVE 12.5 X 12.5 CM',
				'stock' => '1047',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1947 =>
			array (
				'codename' => 'ALK00001560',
				'name' => 'APRON ONE LENGAN PANJANG',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1948 =>
			array (
				'codename' => 'BBK00000166',
				'name' => 'CELL SET COBAS C311 (4555040001)',
				'stock' => '39732',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1949 =>
			array (
				'codename' => 'OBT00001240',
				'name' => 'LIXIANA FC 30 MG TAB  ',
				'stock' => '265',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1950 =>
			array (
				'codename' => 'ALK00000620',
				'name' => 'FILM DI-HL 20 X 25',
				'stock' => '198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1951 =>
			array (
				'codename' => 'ALK00000619',
				'name' => 'FLAT ROLL R47 (40CMX400M)',
				'stock' => '144',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1952 =>
			array (
				'codename' => 'ALK00000018',
				'name' => 'ABDOMINAL BINDER XL (2060)- OPPO',
				'stock' => '350',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1953 =>
			array (
				'codename' => 'ALK00000617',
				'name' => 'FLAT ROLL R43 (20CMX200M)',
				'stock' => '66',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1954 =>
			array (
				'codename' => 'ALK00001668',
				'name' => 'TROCAR XCEL BLADELESS NO.11MM (B11LT)',
				'stock' => '20400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1955 =>
			array (
				'codename' => 'ALK00001667',
				'name' => 'LIGACLIP APPLIER (ER320)',
				'stock' => '35900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1956 =>
			array (
				'codename' => 'ALK00000016',
				'name' => 'ABDOMINAL BINDER MEDIUM (2060)- OPPO',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1957 =>
			array (
				'codename' => 'OBT00000772',
				'name' => 'NIFURAL SYRUP 60 ML',
				'stock' => '632',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1958 =>
			array (
				'codename' => 'OBT00001235',
				'name' => 'EPEXOL 30 MG TABLET',
				'stock' => '6',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1959 =>
			array (
				'codename' => 'ALK00001664',
				'name' => 'TROCAR THORACIC CATHETER NO. 20',
				'stock' => '1755',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1960 =>
			array (
				'codename' => 'ALK00000616',
				'name' => 'AUTOCLAVE INDICATOR TAPE',
				'stock' => '1800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1961 =>
			array (
				'codename' => 'BBK00000158',
				'name' => 'ANTI HBS II (CENTAUR 10286268)',
				'stock' => '147408',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1962 =>
			array (
				'codename' => 'OBT00000770',
				'name' => 'DIAGIT TAB',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1963 =>
			array (
				'codename' => 'OBT00001228',
				'name' => 'PAMOL 250MG SUPP',
				'stock' => '160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1964 =>
			array (
				'codename' => 'ALK00001663',
				'name' => 'TROCAR THORACIC CATHETER NO. 18',
				'stock' => '1755',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1965 =>
			array (
				'codename' => 'OBT00000886',
				'name' => 'VITAMIN K INJ / PHYTOMENADION',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1966 =>
			array (
				'codename' => 'BBK00000152',
				'name' => 'VIDAS Procalcitonin',
				'stock' => '256850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1967 =>
			array (
				'codename' => 'ALK00001662',
				'name' => 'CHEST DRAINAGE THORAMETRIX NC-5512',
				'stock' => '7540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1968 =>
			array (
				'codename' => 'OBT00001297',
				'name' => 'TAMIFLU 75 MC CAP',
				'stock' => '197',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1969 =>
			array (
				'codename' => 'OBT00000884',
				'name' => 'DOTAREM 10 ML',
				'stock' => '5031',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1970 =>
			array (
				'codename' => 'OBT00000881',
				'name' => 'DIBEKACIN 100 MG INJ',
				'stock' => '890',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1971 =>
			array (
				'codename' => 'OBT00000879',
				'name' => 'DEPO PROGESTIN 150 MG/3 ML INJ',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1972 =>
			array (
				'codename' => 'OBT00001295',
				'name' => 'NITROKAF FORTE SR 5 MG CAP',
				'stock' => '39',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1973 =>
			array (
				'codename' => 'ALK00000007',
				'name' => '3WAYSTOPCOCK 394600 BD',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1974 =>
			array (
				'codename' => 'ALK00000005',
				'name' => 'VITRECTOMY PACK 23G (4200.ASC06)',
				'stock' => '64533',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1975 =>
			array (
				'codename' => 'OBT00000762',
				'name' => 'PROBIOKID SACHETS',
				'stock' => '137',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1976 =>
			array (
				'codename' => 'OBT00001223-1',
				'name' => 'CURCUMA FCT',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1977 =>
			array (
				'codename' => 'OBT00000871',
				'name' => 'COLSANCETIN  I GR INJ',
				'stock' => '104',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1978 =>
			array (
				'codename' => 'ALK00000002',
				'name' => 'PRESSURE INFUSOR BAG 500ML',
				'stock' => '6116',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1979 =>
			array (
				'codename' => 'ALK00001633',
				'name' => 'GURITA CORSET SIZE XL',
				'stock' => '1459',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1980 =>
			array (
				'codename' => 'BBK00000146',
				'name' => 'VIDAS Anti HCV',
				'stock' => '95700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1981 =>
			array (
				'codename' => 'BBK00000144',
				'name' => 'SYRINGE CLOT CATCHERS (pHOx)',
				'stock' => '10312',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1982 =>
			array (
				'codename' => 'OBT00001215',
				'name' => 'LETONAL 25 MG TAB',
				'stock' => '46',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1983 =>
			array (
				'codename' => 'OBT00000868',
				'name' => 'CEFIZOX 1 GRAM INJ',
				'stock' => '2255',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1984 =>
			array (
				'codename' => 'ALK00000159',
				'name' => 'CYTOMAX II DOUBLE LUMEN BILIARY CYTOLOGY BRUSH(DLB-35-1.5-S)',
				'stock' => '29260',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1985 =>
			array (
				'codename' => 'BBK00000109',
				'name' => 'SALMONELLA O AG GRUP B (CB 507)',
				'stock' => '1512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1986 =>
			array (
				'codename' => 'A2948',
				'name' => 'EXTRACE 200 MG INJ',
				'stock' => '94',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1987 =>
			array (
				'codename' => 'OBT00001209',
				'name' => 'LEVOFLOXACIN 500 MG TAB ',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1988 =>
			array (
				'codename' => 'OBT00000856',
				'name' => 'NEURO AID CAP',
				'stock' => '192',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1989 =>
			array (
				'codename' => 'BBK00000134',
				'name' => 'VACUETTE 454325 CITRATE 3ML',
				'stock' => '1155',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1990 =>
			array (
				'codename' => 'BBK00000130',
				'name' => 'TUBE PHOENIX AST BROTH SP100 BD 246003',
				'stock' => '269',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1991 =>
			array (
				'codename' => 'OBT00001203',
				'name' => 'SANEXON 8 MG TAB',
				'stock' => '34',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1992 =>
			array (
				'codename' => 'ALK00000150',
				'name' => 'CUSTOM MOLDED SHOES ',
				'stock' => '44550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1993 =>
			array (
				'codename' => 'BBK00000128',
				'name' => 'TUBE EDTA PLH 13X75  3.0 BLBLCE LAV (368857)',
				'stock' => '2684',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1994 =>
			array (
				'codename' => 'ALK00001656',
				'name' => 'ETT NKK NO. 5,5 WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1995 =>
			array (
				'codename' => 'OBT00000854',
				'name' => 'TRENTAL 300 MG/15 ML INJ',
				'stock' => '807',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1996 =>
			array (
				'codename' => 'A2942',
				'name' => 'SELOXY AA TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1997 =>
			array (
				'codename' => 'A2914',
				'name' => 'Obat Adjust 1',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1998 =>
			array (
				'codename' => 'ALK00000141',
				'name' => 'CORRUGATED TUBE + MASKER (160 CM + MASKER PEDIATRIC)',
				'stock' => '638',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			1999 =>
			array (
				'codename' => 'ALK00001655',
				'name' => 'ETT NKK NO. 5 WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2000 =>
			array (
				'codename' => 'ALK00001653',
				'name' => 'ETT NKK NO.  4 WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2001 =>
			array (
				'codename' => 'BBK00000123',
				'name' => 'THROMBIN TIME OWHM13 ',
				'stock' => '1881',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2002 =>
			array (
				'codename' => 'OBT00000844',
				'name' => 'THROMBOREDUCTIN 0,5 MG CAP',
				'stock' => '550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2003 =>
			array (
				'codename' => 'OBT00001148',
				'name' => 'LONIDE 40 MG TAB',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2004 =>
			array (
				'codename' => 'OBT00000843',
				'name' => 'INTEGRILIN IV INFUS 100 ML',
				'stock' => '13775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2005 =>
			array (
				'codename' => 'ALK00000612',
				'name' => 'KASSA XRAY 10 CM X 10 CM 16 PLY',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2006 =>
			array (
				'codename' => 'BBK00000136',
				'name' => 'XILOL 100 ML',
				'stock' => '968',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2007 =>
			array (
				'codename' => 'CGN00000053',
				'name' => 'KN-2.0/2.5 LOCKING DISTA RADIUS V-3 LOC 3H-R(345.2750320.15)',
				'stock' => '70125',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2008 =>
			array (
				'codename' => 'CGN00000046',
				'name' => 'KN-LOCKING SCREW 2.0 X 14 MM, TI (218.0102014.25)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2009 =>
			array (
				'codename' => 'OBT00000841',
				'name' => 'DISOLF EC 490 MG TAB',
				'stock' => '99',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2010 =>
			array (
				'codename' => 'BBK00000119',
				'name' => 'TABUNG KAPILER HEMATOKRIT',
				'stock' => '935',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2011 =>
			array (
				'codename' => 'OBT00000840',
				'name' => 'DORNER 20 MCG TAB',
				'stock' => '74',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2012 =>
			array (
				'codename' => 'BBK00000078',
				'name' => 'MEDITAPE II 9U AQ995607 SYSMEX',
				'stock' => '7429',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2013 =>
			array (
				'codename' => 'ALK00000126',
				'name' => 'COLLAR PHILADELPIA M',
				'stock' => '6600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2014 =>
			array (
				'codename' => 'A060',
				'name' => 'Obat Test Kartu Stok',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2015 =>
			array (
				'codename' => 'BBK00000076',
				'name' => 'MEDITAPE CHECK 1 (10ML) BD724145',
				'stock' => '1057',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2016 =>
			array (
				'codename' => 'ALK00001585',
				'name' => 'BAJU APD COVERALL HAZMAT',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2017 =>
			array (
				'codename' => 'ALK00001584',
				'name' => 'ALLEVYN LIFE SACRUM (21.6 CM X 23 CM)',
				'stock' => '2585',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2018 =>
			array (
				'codename' => 'ALK00001533',
				'name' => 'AHA ULTRA SMOOTHING LOTION 200 ML',
				'stock' => '3551',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2019 =>
			array (
				'codename' => 'OBT00001197',
				'name' => 'RESPIMER NORMAL JET NASAL HYGIENE 135 ML',
				'stock' => '1460',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2020 =>
			array (
				'codename' => 'OBT00001196',
				'name' => 'SINGULAIR 10 MG TAB',
				'stock' => '89',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2021 =>
			array (
				'codename' => 'OBT00001194',
				'name' => 'PAPULEX OIL FREE 40 ML',
				'stock' => '1892',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2022 =>
			array (
				'codename' => 'OBT00001192',
				'name' => 'MELANOX FORTE CREAM 15 GR  ',
				'stock' => '346',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2023 =>
			array (
				'codename' => 'OBT00001188',
				'name' => 'SCABIMITE CREAM 10 GR',
				'stock' => '468',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2024 =>
			array (
				'codename' => 'OBT00000839',
				'name' => 'THROMBO ASPILETS 80 MG TAB',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2025 =>
			array (
				'codename' => 'BBK00000116',
				'name' => 'SYR ABG PRESET 1CC (364413)',
				'stock' => '218',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2026 =>
			array (
				'codename' => 'CGN00000029',
				'name' => 'KN-CORTEX SCREW-SELF TAPING 3.5 X 34 MM, TI (202.0350034.25)',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2027 =>
			array (
				'codename' => 'BBK00000115',
				'name' => 'STANDART HUMAN PLASMA (CS ORKL17)**',
				'stock' => '3098',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2028 =>
			array (
				'codename' => 'BBK00000108',
				'name' => 'SALMONELLA O AG GRUP A (CB 506)',
				'stock' => '1512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2029 =>
			array (
				'codename' => 'ALK00001651',
				'name' => 'ETT NKK NO. 2 WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2030 =>
			array (
				'codename' => 'ALK00000127',
				'name' => 'COLLAR PHILADELPIA S   1023',
				'stock' => '6600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2031 =>
			array (
				'codename' => 'BBK00000103',
				'name' => 'RPR SPECIAL KIT (FRPR 500S)',
				'stock' => '8129',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2032 =>
			array (
				'codename' => 'ALK00001650',
				'name' => 'STERIL GAMMEX LATEX SENSITIVE NO. 7.5 (GLS)',
				'stock' => '15372',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2033 =>
			array (
				'codename' => 'BBK00000097',
				'name' => 'PEWARNAAN RAPID A3 R1 (METHANOL)',
				'stock' => '3740',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2034 =>
			array (
				'codename' => 'OBT00000835',
				'name' => 'TRANSAMIN 500 MG TAB',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2035 =>
			array (
				'codename' => 'OBT00000836',
				'name' => 'PLASMINEX 500 MG/5ML INJ',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2036 =>
			array (
				'codename' => 'CGN00000012',
				'name' => 'KN-LOCKING SCREW 3.5 X 30 MM (218.0103530.25)',
				'stock' => '6035',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2037 =>
			array (
				'codename' => 'BBK00000093',
				'name' => 'PANEL PHOENIX NMIC/ID 4 (448505)',
				'stock' => '1616',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2038 =>
			array (
				'codename' => 'OBT00001292',
				'name' => 'REMIKAF 1 MG INJ',
				'stock' => '990',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2039 =>
			array (
				'codename' => 'ALK00000115',
				'name' => 'CERTOFIX TRIO V 1220 HF (4160622)',
				'stock' => '11550',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2040 =>
			array (
				'codename' => 'BBK00000086',
				'name' => 'OBJECT GLASS 7201/7101',
				'stock' => '242',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2041 =>
			array (
				'codename' => 'A021',
				'name' => 'Oskadon',
				'stock' => '50000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2042 =>
			array (
				'codename' => 'OBT00000834',
				'name' => 'TRANSAMIN 250 MG CAPSUL',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2043 =>
			array (
				'codename' => 'ALK00000099',
				'name' => 'CAPIOX OXYGENATOR NEONATE TERUMO (P17CXF02) COMPLETE',
				'stock' => '170078',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2044 =>
			array (
				'codename' => 'OBT00001291',
				'name' => 'NOKOBA INJ',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2045 =>
			array (
				'codename' => 'ALK00000091',
				'name' => 'BREATHING CIRCUIT 2,4 M COAXIAL UNIFLOW SYSTEM (2901)',
				'stock' => '2992',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2046 =>
			array (
				'codename' => 'OBT00000830',
				'name' => 'FENOSUP LIDOSE 160 MG CAP',
				'stock' => '128',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2047 =>
			array (
				'codename' => 'OBT00001140',
				'name' => 'FERRIZ DROP',
				'stock' => '280',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2048 =>
			array (
				'codename' => 'ALK00001530',
				'name' => 'ROLL TAMPON 3 CM X-RAY',
				'stock' => '275',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2049 =>
			array (
				'codename' => 'OBT00000829',
				'name' => 'EZETROL 10MG TAB',
				'stock' => '169',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2050 =>
			array (
				'codename' => 'BBK00000072',
				'name' => 'LINEARITY CONTROL MATERIAL-CORNLEY KLITE5',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2051 =>
			array (
				'codename' => 'BBK00000068',
				'name' => 'HIV 1/2/0 TRILINE HANGZHOU (IHIV-C42)',
				'stock' => '352',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2052 =>
			array (
				'codename' => 'BBK00000300',
				'name' => 'RAPID LUMIQUICK 2019-nCOV IgG/IgM TEST CARD',
				'stock' => '800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2053 =>
			array (
				'codename' => 'ALK00001519',
				'name' => 'GYPSONA 15 X 2,7 / 6 INC',
				'stock' => '541',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2054 =>
			array (
				'codename' => 'BBK00000066',
				'name' => 'HITACHI CUP SAMPULLE',
				'stock' => '8860',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2055 =>
			array (
				'codename' => 'OBT00000828',
				'name' => 'TRUVAZ 20 MG TAB',
				'stock' => '113',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2056 =>
			array (
				'codename' => 'BBK00000126',
				'name' => 'T-SPOT. TB (116TB300KT)',
				'stock' => '6050',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2057 =>
			array (
				'codename' => 'OBT00001128',
				'name' => 'POLYSILANE SYR 180 ML',
				'stock' => '297',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2058 =>
			array (
				'codename' => 'ALK00000082',
				'name' => 'BLUE LABEL WITH INDICATOR (STEAM)-240-872',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2059 =>
			array (
				'codename' => 'OBT00001145',
				'name' => 'DOXORUBICIN 50 MG INJ ',
				'stock' => '2800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2060 =>
			array (
				'codename' => 'BBK00000056',
				'name' => 'DECK GLASS 20 X 20 MM (NEW)',
				'stock' => '180',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2061 =>
			array (
				'codename' => 'OBT00000824',
				'name' => 'SEROLIN 10 MG TAB',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2062 =>
			array (
				'codename' => 'ALK00001515',
				'name' => 'ETHIBOND 5 MB66G',
				'stock' => '5510',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2063 =>
			array (
				'codename' => 'BBK00000055',
				'name' => 'DARAH DOMBA 100 ML',
				'stock' => '7326',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2064 =>
			array (
				'codename' => 'OBT00001290',
				'name' => 'SIMVASTATIN 20 MG TAB ',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2065 =>
			array (
				'codename' => 'ALK00001511',
				'name' => 'TYVEK ROLL 30CMX100M (LTR45)',
				'stock' => '396',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2066 =>
			array (
				'codename' => 'OBT00000815',
				'name' => 'FUROSEMIDE 40 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2067 =>
			array (
				'codename' => 'ALK00000066',
				'name' => 'BIOPSI RADIAL JAW 4 SC 160 CM (M00513383)',
				'stock' => '2640',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2068 =>
			array (
				'codename' => 'OBT00001289',
				'name' => 'ATORVASTATIN 40 MG TAB',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2069 =>
			array (
				'codename' => 'ALK00000043',
				'name' => 'ARMSLING UKURAN S BERWARNA',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2070 =>
			array (
				'codename' => 'OBT00000814',
				'name' => 'CLONIDIN 0.15MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2071 =>
			array (
				'codename' => 'OBT00001121',
				'name' => 'BETADINE SPRAY 55 GR',
				'stock' => '715',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2072 =>
			array (
				'codename' => 'B007',
				'name' => 'Vitamin B1',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2073 =>
			array (
				'codename' => 'ALK00000064',
				'name' => 'BIO INDICATOR STEAM (324-551)',
				'stock' => '1309',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2074 =>
			array (
				'codename' => 'OBT00000809',
				'name' => 'NIFEDIPIN 10 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2075 =>
			array (
				'codename' => 'OBT00001288',
				'name' => 'ATORVASTATIN 20 MG TAB',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2076 =>
			array (
				'codename' => 'OBT00000803',
				'name' => 'BIOPREXUM FC 5 MG TAB',
				'stock' => '103',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2077 =>
			array (
				'codename' => 'B005',
				'name' => 'Omeprazole 1405',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2078 =>
			array (
				'codename' => 'BBK00000118',
				'name' => 'TABUNG ASSISTANT (12X75)',
				'stock' => '6600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2079 =>
			array (
				'codename' => 'OBT00001111',
				'name' => 'RIFAMPICIN 600 MG CAPLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2080 =>
			array (
				'codename' => 'OBT00000802',
				'name' => 'HYPERIL 2,5 MG TAB#',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2081 =>
			array (
				'codename' => 'OBT00001102',
				'name' => 'ZYVOX 2 MG/ML INF 300 ML',
				'stock' => '7875',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2082 =>
			array (
				'codename' => 'B003',
				'name' => 'Diazepam',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2083 =>
			array (
				'codename' => 'OBT00001285',
				'name' => 'EPEXOL FORTE 30 MG/5 ML - 30 ML SYR',
				'stock' => '305',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2084 =>
			array (
				'codename' => 'ALK00000051',
				'name' => 'AUTOFUSER CONTINUOUS TYPE AFSC-4(VOL.100ML, 4CC/JAM)',
				'stock' => '4504',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2085 =>
			array (
				'codename' => 'CGN01992009',
				'name' => 'Paracetamol',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2086 =>
			array (
				'codename' => 'OBT00001096',
				'name' => 'TEOSAL TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2087 =>
			array (
				'codename' => 'OBT00001087',
				'name' => 'NEUROTAM 3 GR/15 ML INJ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2088 =>
			array (
				'codename' => 'ALK00000035',
				'name' => 'ANTIFOG (JG910)',
				'stock' => '1097',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2089 =>
			array (
				'codename' => 'OBT00000793',
				'name' => 'ISOSORBID DINITRAT 5 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2090 =>
			array (
				'codename' => 'OBT00001277-1',
				'name' => 'EPEXOL 15 MG/5 ML - 120 ML SYR',
				'stock' => '190',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2091 =>
			array (
				'codename' => 'ALK00001660',
				'name' => 'STERILIT POWER SYSTEMS OIL SPRAY 300 ML (GB600)',
				'stock' => '23848',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2092 =>
			array (
				'codename' => 'ALK00001657',
				'name' => 'ETT NKK NO. 6  WORK / FORSCH',
				'stock' => '2508',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2093 =>
			array (
				'codename' => 'OBT00001082',
				'name' => 'MEROPENEM 1 GR INJ',
				'stock' => '1100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2094 =>
			array (
				'codename' => 'OBT00001075',
				'name' => 'INFUSAN D5+1/2NS SP',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2095 =>
			array (
				'codename' => 'OBT00000791',
				'name' => 'IMDUR 60 MG TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2096 =>
			array (
				'codename' => 'OBT00000783',
				'name' => 'ONDANSETRON 8 MG/4 ML INJ (5s)',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2097 =>
			array (
				'codename' => 'ALK00000906',
				'name' => 'COTTON BUD DWS PIGEON/HUKI',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2098 =>
			array (
				'codename' => 'ALK00001048',
				'name' => 'NEEDLE 25G X 5/8 TERUMO',
				'stock' => '20',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2099 =>
			array (
				'codename' => 'OBT00000782',
				'name' => 'ONDANSETRON 4 MG TAB (12s)',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2100 =>
			array (
				'codename' => 'ALK00001649',
				'name' => 'CARBON STEEL SCALPEL #15',
				'stock' => '3168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2101 =>
			array (
				'codename' => 'BBK00000113',
				'name' => 'SMS (COBAS-501) 50 ML (4489225190)',
				'stock' => '1991',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2102 =>
			array (
				'codename' => 'ALK00001006',
				'name' => 'MERSILK 0 W214 ',
				'stock' => '887',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2103 =>
			array (
				'codename' => 'OBT00001038',
				'name' => 'K-Y JELLY GEL 100 GR',
				'stock' => '619',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2104 =>
			array (
				'codename' => 'OBT00000778',
				'name' => 'URDAHEX 250 MG CAPSUL',
				'stock' => '71',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2105 =>
			array (
				'codename' => 'ALK00000834',
				'name' => 'GAUZE PADS (4340 HX)',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2106 =>
			array (
				'codename' => 'OBT00000777',
				'name' => 'CURVIT CL 175 ML EMULSION#',
				'stock' => '512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2107 =>
			array (
				'codename' => 'BBK00000110',
				'name' => 'SALMONELLA O AG GRUP C (CB 508)',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2108 =>
			array (
				'codename' => 'ALK00001647',
				'name' => 'CARBON STEEL SCALPEL #22',
				'stock' => '3201',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2109 =>
			array (
				'codename' => 'OBT00000775',
				'name' => 'DULCOLACTOL SYRUP 60 ML',
				'stock' => '618',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2110 =>
			array (
				'codename' => 'OBT00000773',
				'name' => 'NORIT 125 MG TAB',
				'stock' => '5',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2111 =>
			array (
				'codename' => 'OBT00001030',
				'name' => 'OMNIPAQUE 300/20 ML ',
				'stock' => '81',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2112 =>
			array (
				'codename' => 'OBT00000768',
				'name' => 'SPASMOMEN 40 MG TAB',
				'stock' => '68',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2113 =>
			array (
				'codename' => 'BBK00000289',
				'name' => 'PROCELL ELECSYS COBAS (11662988122)',
				'stock' => '9440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2114 =>
			array (
				'codename' => 'ALK00000824',
				'name' => 'LEG COVER X-LONG 57 X 112CM MEDITECH',
				'stock' => '1150',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2115 =>
			array (
				'codename' => 'OBT00000766',
				'name' => 'DUSPATALIN 135 MG TAB',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2116 =>
			array (
				'codename' => 'ALK00000820',
				'name' => 'MAYO TUBE + PLESTER + COTTON',
				'stock' => '1034',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2117 =>
			array (
				'codename' => 'ALK00001646',
				'name' => 'CARBON STEEL SCALPEL #21',
				'stock' => '3333',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2118 =>
			array (
				'codename' => 'BBK00000106',
				'name' => 'SALMONELLA H AG ANTIGEN D TYPI H (CB 514)',
				'stock' => '1512',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2119 =>
			array (
				'codename' => 'OBT00001013',
				'name' => 'AERIUS 0,5 MG/ML SYRUP 60 ML',
				'stock' => '944',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2120 =>
			array (
				'codename' => 'OBT00000758',
				'name' => 'STROCAIN 400 MG TABLET',
				'stock' => '22',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2121 =>
			array (
				'codename' => 'OBT00001010',
				'name' => 'IMUNOS SYRUP',
				'stock' => '693',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2122 =>
			array (
				'codename' => 'OBT00001007',
				'name' => 'ZIBRAMAX SYRUP',
				'stock' => '1133',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2123 =>
			array (
				'codename' => 'OBT00000756',
				'name' => 'PANTOPRAZOLE 40 MG TAB',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2124 =>
			array (
				'codename' => 'OBT00000757',
				'name' => 'PANTOPRAZOLE 40 MG INJ ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2125 =>
			array (
				'codename' => 'ALK00000805',
				'name' => 'TENSOCREPE ELASTIC PERBAN BESAR (6 INCH)',
				'stock' => '1001',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2126 =>
			array (
				'codename' => 'ALK00000801',
				'name' => 'MONOCRYL PLUS AB 3-0 CUTTING (MCP683H)',
				'stock' => '1697',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2127 =>
			array (
				'codename' => 'OBT00000755',
				'name' => 'PRANZA 40 MG INJ',
				'stock' => '1450',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2128 =>
			array (
				'codename' => 'ALK00000786',
				'name' => 'ETT 4,5 WITH CUFF NKK',
				'stock' => '3850',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2129 =>
			array (
				'codename' => 'ALK00000780',
				'name' => 'DOP MATA STERIL',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2130 =>
			array (
				'codename' => 'OBT00000754',
				'name' => 'FAMOCID 40 MG TAB',
				'stock' => '58',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2131 =>
			array (
				'codename' => 'OBT00000753',
				'name' => 'FAMOCID 20 MG TAB',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2132 =>
			array (
				'codename' => 'BBK00000096',
				'name' => 'PASTEUR PIPPTES VOL 3 ML',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2133 =>
			array (
				'codename' => 'ALK00001645',
				'name' => 'CARBON STEEL SCALPEL #20',
				'stock' => '3201',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2134 =>
			array (
				'codename' => 'OBT00000750',
				'name' => 'FARMACROL FORTE SYRUP 100ML',
				'stock' => '429',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2135 =>
			array (
				'codename' => 'OBT00000751',
				'name' => 'FARMACROL FORTE TAB',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2136 =>
			array (
				'codename' => 'OBT00000749',
				'name' => 'SANMAG TAB',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2137 =>
			array (
				'codename' => 'OBT00000748',
				'name' => 'SANMAG SYR 120 ML',
				'stock' => '268',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2138 =>
			array (
				'codename' => 'OBT00000747',
				'name' => 'MYLANTA SUSPENSI 150 ML',
				'stock' => '353',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2139 =>
			array (
				'codename' => 'ALK00000200',
				'name' => 'DURAGEN PLUS 2 X 2 IN (5CMX5CM)',
				'stock' => '71500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2140 =>
			array (
				'codename' => 'BBK00000281',
				'name' => 'BOTOL + TUTUP 100 CC',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2141 =>
			array (
				'codename' => 'OBT00001284',
				'name' => 'FENOFIBRATE 300 MG CAP',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2142 =>
			array (
				'codename' => 'OBT00000961',
				'name' => 'VENOFER 100 MG/5 ML INJ',
				'stock' => '1944',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2143 =>
			array (
				'codename' => 'OBT00001283',
				'name' => 'FENOFIBRATE 100 MG CAP',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2144 =>
			array (
				'codename' => 'ALK00000742',
				'name' => 'STERIL GAMMEX LATEX SENSITIVE NO. 7',
				'stock' => '307',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2145 =>
			array (
				'codename' => 'OBT00001282',
				'name' => 'ATORVASTATIN 20 MG TAB',
				'stock' => '29',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2146 =>
			array (
				'codename' => 'ALK00000737',
				'name' => 'SURGICAL GOWN L HOGY SG-SMS13KT',
				'stock' => '823',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2147 =>
			array (
				'codename' => 'OBT00000951',
				'name' => 'PANTOZOL INJ',
				'stock' => '1682',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2148 =>
			array (
				'codename' => 'OBT00001281',
				'name' => 'SIMVASTATIN 20 MG TAB',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2149 =>
			array (
				'codename' => 'ALK00000037',
				'name' => 'AQUACEL 10 X 10 (177902)',
				'stock' => '1497',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2150 =>
			array (
				'codename' => 'OBT00000932',
				'name' => 'DULCOLAX SUPP ADULT 10 MG',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2151 =>
			array (
				'codename' => 'OBT00001280',
				'name' => 'ESOMEPRAZOLE 40 MG TAB',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2152 =>
			array (
				'codename' => 'OBT00000935',
				'name' => 'VAKSIN FLUQUADRI INJS 0.5 ML PFS',
				'stock' => '2195',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2153 =>
			array (
				'codename' => 'OBT00001278',
				'name' => 'CENDO FENICOL 0.5% EYE DROP - 5 ML',
				'stock' => '337',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2154 =>
			array (
				'codename' => 'OBT00000801',
				'name' => 'MISOPROSTOL 200 MG TAB',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2155 =>
			array (
				'codename' => 'OBT00001274',
				'name' => 'S-OMEVELL 20 MG TAB',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2156 =>
			array (
				'codename' => 'OBT00000910',
				'name' => 'RHINOS SR CAP',
				'stock' => '52',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2157 =>
			array (
				'codename' => 'A2921',
				'name' => 'CDR',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2158 =>
			array (
				'codename' => 'OBT00001271',
				'name' => 'TROVENSIS 4 MG TAB',
				'stock' => '134',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2159 =>
			array (
				'codename' => 'OBT00000909',
				'name' => 'IKAPHEN 100 MG/2 ML INJ',
				'stock' => '874',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2160 =>
			array (
				'codename' => 'OBT00001269',
				'name' => 'TROVENSIS 8 MG INJ/4 ML',
				'stock' => '516',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2161 =>
			array (
				'codename' => 'OBT00000789',
				'name' => 'CENDO POLYGRAN EYE DROP  5 ML',
				'stock' => '348',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2162 =>
			array (
				'codename' => 'ALK00000658',
				'name' => 'GELANG PASIEN ANAK PUTIH',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2163 =>
			array (
				'codename' => 'OBT00001268',
				'name' => 'TROVENSIS 4 MG INJ/2 ML',
				'stock' => '363',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2164 =>
			array (
				'codename' => 'ALK00000655',
				'name' => 'VICRYL 1 (W9451)',
				'stock' => '1055',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2165 =>
			array (
				'codename' => 'OBT00001266',
				'name' => 'JARDIANCE 10 MG TAB',
				'stock' => '177',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2166 =>
			array (
				'codename' => 'ALK00000647',
				'name' => 'VICRYL 3-0 (J316H)',
				'stock' => '1018',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2167 =>
			array (
				'codename' => 'OBT00001264',
				'name' => 'PERSIDAL 1 MG TAB',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2168 =>
			array (
				'codename' => 'A2844',
				'name' => 'ADONA AC INJ 10 ML',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2169 =>
			array (
				'codename' => 'OBT00000899',
				'name' => 'NOTRIXUM 25 MG INJEKSI',
				'stock' => '495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2170 =>
			array (
				'codename' => 'OBT00000892',
				'name' => 'KETAMIN 500 MG/10 ML INJ',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2171 =>
			array (
				'codename' => 'OBT00001261',
				'name' => 'LYRICA 50 MG CAP',
				'stock' => '98',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2172 =>
			array (
				'codename' => 'OBT00000885',
				'name' => 'XOLMETRAS 350/50',
				'stock' => '2750',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2173 =>
			array (
				'codename' => 'OBT00001260',
				'name' => 'BREATHY NASAL SPRAY 6.5 MG/ML 30 ML',
				'stock' => '880',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2174 =>
			array (
				'codename' => 'OBT00000877',
				'name' => 'CYSTISTAT 40 MG / 50 ML INJ',
				'stock' => '17875',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2175 =>
			array (
				'codename' => 'OBT00001256',
				'name' => 'EFISOL TAB LOZENGES 10 ML',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2176 =>
			array (
				'codename' => 'OBT00000869',
				'name' => 'CEFOPERAZONE + SULBACTAM 1 GR INJ',
				'stock' => '616',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2177 =>
			array (
				'codename' => 'OBT00000861',
				'name' => 'FLAMICORT INJ 10 MG/ML X 5ML  ( I.A - I.D ) ',
				'stock' => '250',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2178 =>
			array (
				'codename' => 'OBT00001254',
				'name' => 'ENKASARI GARGLE 120 ML',
				'stock' => '170',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2179 =>
			array (
				'codename' => 'ALK00000199',
				'name' => 'DURAGEN PLUS 1 X 3 IN (2.5CM X 7.5 CM)',
				'stock' => '60500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2180 =>
			array (
				'codename' => 'OBT00000852',
				'name' => 'MYOVITON TAB',
				'stock' => '17',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2181 =>
			array (
				'codename' => 'OBT00001253',
				'name' => 'CLANEKSI FORTE (250 MG, 62.5 MG)/5 ML DRY SYR 60 ML',
				'stock' => '756',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2182 =>
			array (
				'codename' => 'OBT00000823',
				'name' => 'CITICOLINE 125 MG/ML INJ 2 ML (5s)',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2183 =>
			array (
				'codename' => 'OBT00000816',
				'name' => 'FUROSEMIDE 40 MG INJ',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2184 =>
			array (
				'codename' => 'OBT00001255',
				'name' => 'STELARA  45 MG/0,5ML PFS',
				'stock' => '385000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2185 =>
			array (
				'codename' => 'OBT00001135',
				'name' => 'DOMPERIDONE 10 MG TAB (100s)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2186 =>
			array (
				'codename' => 'ALK00000198',
				'name' => 'DUODERM EXTRA THIN 4 X 4 IN  (187955)',
				'stock' => '395',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2187 =>
			array (
				'codename' => 'ALK00000534',
				'name' => 'SUCTION LINEAR BAG GREEN 2L',
				'stock' => '551',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2188 =>
			array (
				'codename' => 'ALK00000521',
				'name' => 'STOMACH TUBE NO.12 TERUMO',
				'stock' => '370',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2189 =>
			array (
				'codename' => 'ALK00000496',
				'name' => 'SILKAM 4-0 HR17',
				'stock' => '897',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2190 =>
			array (
				'codename' => 'ALK00000491',
				'name' => 'SILKAM 1 HR 48',
				'stock' => '1027',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2191 =>
			array (
				'codename' => 'ALK00000461',
				'name' => 'POT PLASTIK 30 GRAM',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2192 =>
			array (
				'codename' => 'ALK00000417',
				'name' => 'MERSILK 5-0 (W581)',
				'stock' => '808',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2193 =>
			array (
				'codename' => 'ALK00000386',
				'name' => 'KASA LIPAT NON X-RAY 7.5X7.5CM 16PLY',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2194 =>
			array (
				'codename' => 'OBT00000715',
				'name' => 'PRORIS SUPPO 125MG',
				'stock' => '52',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2195 =>
			array (
				'codename' => 'OBT00001195',
				'name' => 'XYZAL 5 MG TAB',
				'stock' => '75',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2196 =>
			array (
				'codename' => 'OBT00000703',
				'name' => 'LACTULAX SYRUP 120ML',
				'stock' => '887',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2197 =>
			array (
				'codename' => 'OBT00000689',
				'name' => 'PIROXICAM 20 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2198 =>
			array (
				'codename' => 'OBT00001193',
				'name' => 'NIACEF 4% GEL 15 GR',
				'stock' => '316',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2199 =>
			array (
				'codename' => 'OBT00000670',
				'name' => 'EPHINEPRINE/ADRENALIN 0,1% INJ 1 ML (100 s)#',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2200 =>
			array (
				'codename' => 'OBT00000666',
				'name' => 'DEXAMETHASON 0.5 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2201 =>
			array (
				'codename' => 'OBT00000633',
				'name' => 'VAKSIN ENGERIX B INJ 1 ML',
				'stock' => '890',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2202 =>
			array (
				'codename' => 'OBT00000626',
				'name' => 'PLASMANATE 250 ML INF',
				'stock' => '16819',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2203 =>
			array (
				'codename' => 'OBT00000724',
				'name' => 'GARENA 400 MG/ 250 ML INFUSION',
				'stock' => '2525',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2204 =>
			array (
				'codename' => 'OBT00001186',
				'name' => 'DALACIN C 150 MG CAP',
				'stock' => '95',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2205 =>
			array (
				'codename' => 'A063',
				'name' => 'ABILIFY TAB 5 MG',
				'stock' => '285',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2206 =>
			array (
				'codename' => 'OBT00000591',
				'name' => 'VENTOLIN 2 MG/5 ML SYR 100 ML',
				'stock' => '496',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2207 =>
			array (
				'codename' => 'ALK00000164',
				'name' => 'DELTA LITE 3 IN',
				'stock' => '1811',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2208 =>
			array (
				'codename' => 'OBT00000585',
				'name' => 'VALVIR 500 MG TAB',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2209 =>
			array (
				'codename' => 'OBT00000577',
				'name' => 'VAKSIN BCG BAYI#',
				'stock' => '2136',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2210 =>
			array (
				'codename' => 'OBT00000001',
				'name' => 'ABBOTIC 500 MG FILM TAB#',
				'stock' => '315',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2211 =>
			array (
				'codename' => 'BBK00000261',
				'name' => 'POT OBAT 200 CC',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2212 =>
			array (
				'codename' => 'CGN00000032',
				'name' => 'KN-CORTEX SCREW-SELF TAPING 3.5 X 40 MM, TI (202.0350040.25)',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2213 =>
			array (
				'codename' => 'OBT00000540',
				'name' => 'TENSILO 1 MG/ML INJ',
				'stock' => '1760',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2214 =>
			array (
				'codename' => 'OBT00000533',
				'name' => 'TEBOKAN 40 MG TABLET',
				'stock' => '54',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2215 =>
			array (
				'codename' => 'OBT00000527',
				'name' => 'SULCOLON 500 MG CAPSUL',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2216 =>
			array (
				'codename' => 'OBT00000522',
				'name' => 'STELAZINE 5 MG TABLET',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2217 =>
			array (
				'codename' => 'OBT00001177',
				'name' => 'TRAMAL RETARD 100MG TAB',
				'stock' => '85',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2218 =>
			array (
				'codename' => 'OBT00000514',
				'name' => 'SIRPLUS SYRUP 100 ML',
				'stock' => '143',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2219 =>
			array (
				'codename' => 'OBT00000111',
				'name' => 'CELEBREX 200 MG CAP#',
				'stock' => '139',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2220 =>
			array (
				'codename' => 'OBT00000510',
				'name' => 'SEVORANE 250 ML SOLUTION',
				'stock' => '98',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2221 =>
			array (
				'codename' => 'OBT00000500',
				'name' => 'SANMOL 1000 MG/100 ML INFUS',
				'stock' => '611',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2222 =>
			array (
				'codename' => 'OBT00000494',
				'name' => 'SALOFALK 500 MG TAB',
				'stock' => '124',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2223 =>
			array (
				'codename' => 'OBT00000484',
				'name' => 'RHINOFED TAB',
				'stock' => '19',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2224 =>
			array (
				'codename' => 'OBT00000478',
				'name' => 'Q-TEN 100 MG SOFTCAP',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2225 =>
			array (
				'codename' => 'A080',
				'name' => 'Obat Test Adjustment - Min',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2226 =>
			array (
				'codename' => 'OBT00000475',
				'name' => 'PUMPISEL 40 MG INJ',
				'stock' => '1112',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2227 =>
			array (
				'codename' => 'OBT00000468',
				'name' => 'PROSTAM SR TABLET',
				'stock' => '112',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2228 =>
			array (
				'codename' => 'A068',
				'name' => 'Bodrex',
				'stock' => '15',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2229 =>
			array (
				'codename' => 'OBT00000464',
				'name' => 'PROFILAS 1 MG TABLET',
				'stock' => '38',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2230 =>
			array (
				'codename' => 'OBT00001171',
				'name' => 'TRILEPTAL 300 MG TAB',
				'stock' => '90',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2231 =>
			array (
				'codename' => 'ALK00000158',
				'name' => 'CYTOBRUSH PLUS MEDSCAND',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2232 =>
			array (
				'codename' => 'OBT00000452',
				'name' => 'PLAVIX 75 MG TAB',
				'stock' => '247',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2233 =>
			array (
				'codename' => 'OBT00000450',
				'name' => 'PETHIDIN HCL 100 MG/2 ML INJEKSI',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2234 =>
			array (
				'codename' => 'OBT00000442',
				'name' => 'OSTEOCARE SYRUP 100 ML',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2235 =>
			array (
				'codename' => 'A056',
				'name' => 'EDEMIN INJEKSI',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2236 =>
			array (
				'codename' => 'A053',
				'name' => 'Amikacin',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2237 =>
			array (
				'codename' => 'A022',
				'name' => 'Perban',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2238 =>
			array (
				'codename' => 'B010',
				'name' => 'Asam Mefenamat',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2239 =>
			array (
				'codename' => 'OBT00001166-1',
				'name' => 'ZYPRAZ 1 MG TAB',
				'stock' => '37',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2240 =>
			array (
				'codename' => 'OBT00001165-1',
				'name' => 'ZYPRAZ 0,5 MG TAB',
				'stock' => '24',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2241 =>
			array (
				'codename' => 'B001',
				'name' => 'Pantoprazole',
				'stock' => '50',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2242 =>
			array (
				'codename' => 'OBT00000393',
				'name' => 'MOLOCO B12 DRAGEE',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2243 =>
			array (
				'codename' => 'OBT00001164-1',
				'name' => 'ZYPRAZ 0,25 MG TAB',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2244 =>
			array (
				'codename' => 'BBK00000142',
				'name' => 'NOVABIOMEDICAL 23935(REAGENT) A',
				'stock' => '90200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2245 =>
			array (
				'codename' => 'OBT00000388',
				'name' => 'MICARDIS PLUS 40 MG TAB',
				'stock' => '161',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2246 =>
			array (
				'codename' => 'OBT00000377',
				'name' => 'MEDIFLEX CREAM 75 GRAM',
				'stock' => '1540',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2247 =>
			array (
				'codename' => 'OBT00001162',
				'name' => 'PRADAXA 75 MG CAP',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2248 =>
			array (
				'codename' => 'OBT00000372',
				'name' => 'MARTOS 10 - 500 ML OTSUKA',
				'stock' => '924',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2249 =>
			array (
				'codename' => 'OBT00001160',
				'name' => 'CORMEGA CAP ',
				'stock' => '116',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2250 =>
			array (
				'codename' => 'OBT00000363',
				'name' => 'LOVENOX 40MG /0.4ML INJ',
				'stock' => '1735',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2251 =>
			array (
				'codename' => 'OBT00000354',
				'name' => 'LEVOCIN INFUS 100 ML',
				'stock' => '3240',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2252 =>
			array (
				'codename' => 'OBT00001159',
				'name' => 'CANESTEN CR 10 GR',
				'stock' => '344',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2253 =>
			array (
				'codename' => 'OBT00000348',
				'name' => 'LASIX 40 MG TAB',
				'stock' => '48',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2254 =>
			array (
				'codename' => 'OBT00001157',
				'name' => 'SEROQUEL XR 300MG TAB',
				'stock' => '483',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2255 =>
			array (
				'codename' => 'OBT00000344',
				'name' => 'LASAL 2 MG CAP',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2256 =>
			array (
				'codename' => 'OBT00000337',
				'name' => 'KLODERMA OINT 10 GR',
				'stock' => '310',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2257 =>
			array (
				'codename' => 'OBT00000327',
				'name' => 'KALNEX 500 MG/5 ML INJ',
				'stock' => '154',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2258 =>
			array (
				'codename' => 'ALK00001643',
				'name' => 'TAMPON VAGINAL M',
				'stock' => '766',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2259 =>
			array (
				'codename' => 'OBT00000323',
				'name' => 'KAEN 3 B INFUS 500 ML',
				'stock' => '301',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2260 =>
			array (
				'codename' => 'ALK00001642',
				'name' => 'TAMPON VAGINAL L',
				'stock' => '634',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2261 =>
			array (
				'codename' => 'OBT00000314',
				'name' => 'ISOPRINOSINE SYR 60 ML',
				'stock' => '975',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2262 =>
			array (
				'codename' => 'ALK00001641',
				'name' => 'TAMPON VAGINAL S',
				'stock' => '528',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2263 =>
			array (
				'codename' => 'OBT00001249',
				'name' => 'SERTRALINE 50 MG TAB',
				'stock' => '79',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2264 =>
			array (
				'codename' => 'OBT00000306',
				'name' => 'INFUSAN NS 100 ML',
				'stock' => '206',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2265 =>
			array (
				'codename' => 'OBT00000106',
				'name' => 'CEFEPIME 1 GRAM INJ',
				'stock' => '1452',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2266 =>
			array (
				'codename' => 'ALK00000153',
				'name' => 'CUTIMED SILTEC 10 CM X 10 CM',
				'stock' => '990',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2267 =>
			array (
				'codename' => 'OBT00000099',
				'name' => 'CATAPRES 75 MCG TAB',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2268 =>
			array (
				'codename' => 'OBT00000091',
				'name' => 'CAL 95 TAB',
				'stock' => '48',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2269 =>
			array (
				'codename' => 'OBT00001164',
				'name' => 'ZYPRAZ 0,25 MG TAB',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2270 =>
			array (
				'codename' => 'OBT00000083',
				'name' => 'BRAXIDIN TAB',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2271 =>
			array (
				'codename' => 'ALK00001640',
				'name' => 'SURSHIELD VERSATUS-WP 26 G',
				'stock' => '526',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2272 =>
			array (
				'codename' => 'OBT00000075',
				'name' => 'BLOPRESS 8 MG TAB',
				'stock' => '122',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2273 =>
			array (
				'codename' => 'OBT00000071',
				'name' => 'BISOLVON DROP 50 ML*',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2274 =>
			array (
				'codename' => 'OBT00001246',
				'name' => 'CANDESARTAN 8 MG TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2275 =>
			array (
				'codename' => 'OBT00000061',
				'name' => 'BEROTEC 0,1% SOLUTION 50 ML *',
				'stock' => '3000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2276 =>
			array (
				'codename' => 'OBT00000050',
				'name' => 'AVAMYS 27,5 MCG/SPRAY NASAL SPRAY (120 SPRAYS)',
				'stock' => '1732',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2277 =>
			array (
				'codename' => 'OBT00000055',
				'name' => 'BACTESYN ORAL 375 MG TAB',
				'stock' => '173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2278 =>
			array (
				'codename' => 'OBT00001243',
				'name' => 'VITAMIN C 50 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2279 =>
			array (
				'codename' => 'OBT00000048',
				'name' => 'ATIVAN 1 MG TAB',
				'stock' => '42',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2280 =>
			array (
				'codename' => 'OBT00001242',
				'name' => 'KETOMED SS 2 % SHAMPOO 60 ML  ',
				'stock' => '400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2281 =>
			array (
				'codename' => 'OBT00000041',
				'name' => 'ARCOXIA 60 MG FILM-COATED TAB',
				'stock' => '130',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2282 =>
			array (
				'codename' => 'OBT00000036',
				'name' => 'APROVEL 300 MG TAB',
				'stock' => '171',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2283 =>
			array (
				'codename' => 'OBT00001239',
				'name' => 'LIXIANA FC 15 MG TAB  ',
				'stock' => '265',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2284 =>
			array (
				'codename' => 'OBT00000030',
				'name' => 'ANALSIK FC CAPLET',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2285 =>
			array (
				'codename' => 'OBT00000024',
				'name' => 'AMINOFUSIN PAED INFUS 250 ML',
				'stock' => '1012',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2286 =>
			array (
				'codename' => 'OBT00000016',
				'name' => 'ALBOTHYL 90 MG OVULA/VAGINAL OVULA',
				'stock' => '202',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2287 =>
			array (
				'codename' => 'OBT00001236',
				'name' => 'KETOMED CREAM 15 GR',
				'stock' => '257',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2288 =>
			array (
				'codename' => 'OBT00000012',
				'name' => 'ADONA FORTE 30 MG TAB',
				'stock' => '32',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2289 =>
			array (
				'codename' => 'OBT00000006',
				'name' => 'ACTONEL 35 MG TAB#',
				'stock' => '1268',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2290 =>
			array (
				'codename' => 'ALK00001639',
				'name' => 'OPSITE POST OP 25 X 10 CM',
				'stock' => '418',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2291 =>
			array (
				'codename' => 'ALK00001638',
				'name' => 'GUEDEL 5 INTERSURGICAL',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2292 =>
			array (
				'codename' => 'ALK00001637',
				'name' => 'CAUTER EMED',
				'stock' => '2076',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2293 =>
			array (
				'codename' => 'ALK00001636',
				'name' => 'SURFLO W WITH PORT IV. CATH NO. 26 G X 1 1/4',
				'stock' => '321',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2294 =>
			array (
				'codename' => 'BBK00000239',
				'name' => 'VIDAS TPSA 30428',
				'stock' => '86625',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2295 =>
			array (
				'codename' => 'BBK00000234',
				'name' => 'VIDAS FERRITIN (30411)',
				'stock' => '56320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2296 =>
			array (
				'codename' => 'OBT00001229',
				'name' => 'STARCEF 100 MG CAP',
				'stock' => '173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2297 =>
			array (
				'codename' => 'BBK00000226',
				'name' => 'UX II SEARCH-BAC (25ML) BA649537',
				'stock' => '25927',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2298 =>
			array (
				'codename' => 'BBK00000222',
				'name' => 'UREA/BUN ( COBAS 4460715190 )',
				'stock' => '33495',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2299 =>
			array (
				'codename' => 'BBK00000217',
				'name' => 'TQ APOLIPOPROTEIN B VERS.2 COBAS (3032574122)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2300 =>
			array (
				'codename' => 'OBT00001153',
				'name' => 'TANTUM VERDE ORAL RINSE 120 ML',
				'stock' => '318',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2301 =>
			array (
				'codename' => 'OBT00001225',
				'name' => 'MST CONTINUS 15 MG TAB',
				'stock' => '230',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2302 =>
			array (
				'codename' => 'BBK00000213',
				'name' => 'TCBS CHOLERA MEDIUM OXOID (CM0333B)',
				'stock' => '11375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2303 =>
			array (
				'codename' => 'BBK00000211',
				'name' => 'STERRAD 100S CASSETTE J&J 10113',
				'stock' => '180909',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2304 =>
			array (
				'codename' => 'BBK00000304',
				'name' => 'COFFEIN POWDER BASED',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2305 =>
			array (
				'codename' => 'BBK00000209',
				'name' => 'SEDIPLAST WITH Na CITRATE 250 LP (LED)',
				'stock' => '20900',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2306 =>
			array (
				'codename' => 'BBK00000205',
				'name' => 'REACTION CELL SET (COBAS)-(4854241001)',
				'stock' => '39732',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2307 =>
			array (
				'codename' => 'BBK00000202',
				'name' => 'MICROPLATE NEONATAL TSH ASSAY (532-6110)',
				'stock' => '176160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2308 =>
			array (
				'codename' => 'OBT00001219',
				'name' => 'AMINOSTERIL INFANT 10 % INFUS 100 ML',
				'stock' => '1023',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2309 =>
			array (
				'codename' => 'ALK00001634',
				'name' => 'GURITA IBU PEREKAT ALL SIZE',
				'stock' => '1346',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2310 =>
			array (
				'codename' => 'BBK00000200',
				'name' => 'Mg2 (COBAS)-(6481647190)',
				'stock' => '10407',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2311 =>
			array (
				'codename' => 'BBK00000198',
				'name' => 'MAC CONKEY AGAR EUR PHARMA (21567)',
				'stock' => '15400',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2312 =>
			array (
				'codename' => 'ALK00001632',
				'name' => 'PUR UMBILICAL CATHETER NO. 8 FR  40 CM SINGLE LUMEN (1270.08)',
				'stock' => '5498',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2313 =>
			array (
				'codename' => 'ALK00001631',
				'name' => 'PUR UMBILICAL CATHETER NO. 5 FR  40 CM SINGLE LUMEN (1270.05)',
				'stock' => '2475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2314 =>
			array (
				'codename' => 'BBK00000195',
				'name' => 'LYSERCELL WDF 5 LTR (ZPPAL337564)',
				'stock' => '89100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2315 =>
			array (
				'codename' => 'BBK00000193',
				'name' => 'LDL-C GEN-3, COBAS (7005717190)',
				'stock' => '73378',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2316 =>
			array (
				'codename' => 'ALK00001630',
				'name' => 'PUR UMBILICAL CATHETER NO. 4 FR  40 CM SINGLE LUMEN (1270.04)',
				'stock' => '2475',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2317 =>
			array (
				'codename' => 'BBK00000191',
				'name' => 'LANCET CONT-ACT BLUE (BD 366594)',
				'stock' => '11044',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2318 =>
			array (
				'codename' => 'BBK00000188',
				'name' => 'KIT GRAM STAIN STABILIZED (BD 212539)',
				'stock' => '10978',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2319 =>
			array (
				'codename' => 'BBK00000176',
				'name' => 'FLUOROCELL RET (XN BN337547)',
				'stock' => '34375',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2320 =>
			array (
				'codename' => 'OBT00001223',
				'name' => 'SUSU NUTRIBABY ROYAL PREMATURE 400 GR',
				'stock' => '962',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2321 =>
			array (
				'codename' => 'ALK00000165',
				'name' => 'DELTA LITE 5 IN#',
				'stock' => '2338',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2322 =>
			array (
				'codename' => 'OBT00001217',
				'name' => 'ACPULSIF 5 MG TAB',
				'stock' => '33',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2323 =>
			array (
				'codename' => 'ALK00000116',
				'name' => 'CHIBA BIOPSY NEEDLE 18 G - 20 CM (DCHN-18-20.0-U)',
				'stock' => '4730',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2324 =>
			array (
				'codename' => 'ALK00000071',
				'name' => 'BISTURI NO 15 AESCULAP',
				'stock' => '40',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2325 =>
			array (
				'codename' => 'OBT00001216',
				'name' => 'LETONAL 100 MG TAB',
				'stock' => '16',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2326 =>
			array (
				'codename' => 'ALK00001564',
				'name' => 'KN-PAKET TOTAL KNEE REPLACEMENT',
				'stock' => '300000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2327 =>
			array (
				'codename' => 'ALK00000009',
				'name' => '6 SHOOTER SAEED MULTI-BAND LIGATOR USED W/9.5-13 MM(MBL-6)',
				'stock' => '38500',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2328 =>
			array (
				'codename' => 'A2959',
				'name' => 'item COGS',
				'stock' => '10',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2329 =>
			array (
				'codename' => 'A2951',
				'name' => 'Obat Oral ABC',
				'stock' => '30',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2330 =>
			array (
				'codename' => 'A2936',
				'name' => 'LANOXIN INJ 2 ML',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2331 =>
			array (
				'codename' => 'A2940',
				'name' => 'DULCOLAX TAB',
				'stock' => '5000',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2332 =>
			array (
				'codename' => 'A2923',
				'name' => 'Obat Expired 1',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2333 =>
			array (
				'codename' => 'OBT00001202',
				'name' => 'RISPERIDONE TABLET 1 MG',
				'stock' => '19',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2334 =>
			array (
				'codename' => 'OBT00001208',
				'name' => 'LANSOPRAZOLE CAP',
				'stock' => '18',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2335 =>
			array (
				'codename' => 'CGN00000027',
				'name' => 'KN-CORTEX SCREW-SELF TAPPING 3.5 X 30 MM,TI(202.0350030.25)',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2336 =>
			array (
				'codename' => 'BBK00000257',
				'name' => 'KAPSUL KOSONG 3',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2337 =>
			array (
				'codename' => 'CGN00000018',
				'name' => 'KN-CORTEX SCREW-SELF TAPPING 3.5 X 12 MM, TI(202.0350012.25)',
				'stock' => '1650',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2338 =>
			array (
				'codename' => 'CGN00000015',
				'name' => 'KN-LOCKING SCREW 3.5 X 36 MM (218.0103536.25)',
				'stock' => '6035',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2339 =>
			array (
				'codename' => 'BBK00000256',
				'name' => 'KAPSUL KOSONG 2',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2340 =>
			array (
				'codename' => 'BBK00000255',
				'name' => 'KAPSUL KOSONG 1',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2341 =>
			array (
				'codename' => 'BBK00000001',
				'name' => 'ACCU CHECK SAFE T PRO UNO (LANCET)',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2342 =>
			array (
				'codename' => 'CGN00000004',
				'name' => 'KN-LOCKING SCREW 3.5 X 12 MM, TI (218.0103512.25)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2343 =>
			array (
				'codename' => 'ALK00001532',
				'name' => 'VICRYL  2 TAPER ( W9452 )',
				'stock' => '1515',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2344 =>
			array (
				'codename' => 'BBK00000302',
				'name' => 'MENTHOL KRISTAL',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2345 =>
			array (
				'codename' => 'OBT00001185',
				'name' => 'CIPRALEX 10 MG TAB',
				'stock' => '200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2346 =>
			array (
				'codename' => 'OBT00001187',
				'name' => 'STERIMAR FOR BABY NASAL HYGIENE',
				'stock' => '1298',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2347 =>
			array (
				'codename' => 'OBT00001184',
				'name' => 'FORNEURO CAP',
				'stock' => '51',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2348 =>
			array (
				'codename' => 'OBT00001181',
				'name' => 'VOLTAREN SR 75 MG TAB',
				'stock' => '87',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2349 =>
			array (
				'codename' => 'OBT00001180',
				'name' => 'MEXPHARM 15 MG CAP',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2350 =>
			array (
				'codename' => 'OBT00001178',
				'name' => 'PONSTAN 500 MG TAB',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2351 =>
			array (
				'codename' => 'OBT00001175',
				'name' => 'MST CONTINUS 15 MG TAB',
				'stock' => '230',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2352 =>
			array (
				'codename' => 'OBT00001174',
				'name' => 'ARICEPT EVESS 5 MG TAB',
				'stock' => '253',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2353 =>
			array (
				'codename' => 'OBT00001173',
				'name' => 'RITALIN 10 MG TAB',
				'stock' => '168',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2354 =>
			array (
				'codename' => 'ALK00001517',
				'name' => 'GYPSONA 7,5 X 2,7 / 3 INC',
				'stock' => '295',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2355 =>
			array (
				'codename' => 'OBT00001131',
				'name' => 'NOROID SOOTHING CREAM 80 ML ',
				'stock' => '1235',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2356 =>
			array (
				'codename' => 'ALK00000604',
				'name' => 'SURSHIELD VERSATUS - WP 24 G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2357 =>
			array (
				'codename' => 'OBT00001125',
				'name' => 'SPORETIK 100 MG CAP',
				'stock' => '212',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2358 =>
			array (
				'codename' => 'OBT00001124',
				'name' => 'SINCRONIK TAB',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2359 =>
			array (
				'codename' => 'ALK00001514',
				'name' => 'STERIL CAMERA DRAPE W/ WING JG904',
				'stock' => '1322',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2360 =>
			array (
				'codename' => 'ALK00000603',
				'name' => 'SURSHIELD VERSATUS - WP 22 G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2361 =>
			array (
				'codename' => 'ALK00000602',
				'name' => 'SURSHIELD VERSATUS - WP 18 G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2362 =>
			array (
				'codename' => 'BBK00000296',
				'name' => 'CHEM INDICATOR STRIP CS (J 14100)',
				'stock' => '35',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2363 =>
			array (
				'codename' => 'ALK00001508',
				'name' => 'TYVEK ROLL 15CMX100M (LTR42)',
				'stock' => '198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2364 =>
			array (
				'codename' => 'ALK00000601',
				'name' => 'SPINOCAN NEEDLE 27G',
				'stock' => '517',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2365 =>
			array (
				'codename' => 'OBT00001114',
				'name' => 'CEFIXIME 100 MG CAP',
				'stock' => '13',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2366 =>
			array (
				'codename' => 'ALK00000741-1',
				'name' => 'VICRYL PLUS 2-0 VCP317 TAPER',
				'stock' => '1307',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2367 =>
			array (
				'codename' => 'ALK00001503-1',
				'name' => 'MONOSYN VIOLET 4-0 CUTTING DS-19',
				'stock' => '1430',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2368 =>
			array (
				'codename' => 'ALK00000599',
				'name' => 'SPINOCAN NEEDLE 25G',
				'stock' => '440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2369 =>
			array (
				'codename' => 'OBT00001109',
				'name' => 'BACTODERM OINT 10GR',
				'stock' => '564',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2370 =>
			array (
				'codename' => 'OBT00001108',
				'name' => 'BACTODERM CREAM 10 GR',
				'stock' => '617',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2371 =>
			array (
				'codename' => 'OBT00001105',
				'name' => 'CETIRIZINE 10 MG TAB (50s)',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2372 =>
			array (
				'codename' => 'ALK00000597',
				'name' => 'LMA SUPREME SIZE 4',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2373 =>
			array (
				'codename' => 'OBT00001100',
				'name' => 'ZANIDIP 20 MG TAB',
				'stock' => '125',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2374 =>
			array (
				'codename' => 'OBT00001098',
				'name' => 'VEBAC 1 GR INJ',
				'stock' => '2420',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2375 =>
			array (
				'codename' => 'OBT00001095',
				'name' => 'TANAPRES 5 MG TAB',
				'stock' => '3399',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2376 =>
			array (
				'codename' => 'ALK00000596',
				'name' => 'LMA SUPREME SIZE 3 (175030)',
				'stock' => '5775',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2377 =>
			array (
				'codename' => 'OBT00001092',
				'name' => 'RENOSAN INFUS 500 ML',
				'stock' => '2771',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2378 =>
			array (
				'codename' => 'OBT00001091',
				'name' => 'PROSPAN COUGH SYRUP',
				'stock' => '700',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2379 =>
			array (
				'codename' => 'OBT00001088',
				'name' => 'PHENYTOIN INJ 100 MG/2ML',
				'stock' => '532',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2380 =>
			array (
				'codename' => 'ALK00000595',
				'name' => 'LMA SUPREME SIZE 2#',
				'stock' => '4704',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2381 =>
			array (
				'codename' => 'OBT00001081',
				'name' => 'MERONEM 1 GR INJ',
				'stock' => '7670',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2382 =>
			array (
				'codename' => 'OBT00001080',
				'name' => 'KAEN 3 A INFUS 500 ML',
				'stock' => '220',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2383 =>
			array (
				'codename' => 'OBT00001076',
				'name' => 'INH 100 MG TAB (100s)',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2384 =>
			array (
				'codename' => 'ALK00000592',
				'name' => 'ACCU CHEK PERFORMA',
				'stock' => '103',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2385 =>
			array (
				'codename' => 'OBT00001073',
				'name' => 'FOSMICIN 1 GR INJ',
				'stock' => '979',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2386 =>
			array (
				'codename' => 'OBT00001071',
				'name' => 'FLAMAR 25 MG ENTERIC COATED TAB',
				'stock' => '9',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2387 =>
			array (
				'codename' => 'OBT00001069',
				'name' => 'FAKTU OINTMENT 20 GR',
				'stock' => '1082',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2388 =>
			array (
				'codename' => 'ALK00000590',
				'name' => 'WING NEEDLE NO 23G X 3/4 TERUMO',
				'stock' => '123',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2389 =>
			array (
				'codename' => 'OBT00001066',
				'name' => 'DORNER 20 MCG TAB',
				'stock' => '74',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2390 =>
			array (
				'codename' => 'OBT00001062',
				'name' => 'COVERAM 5MG/5MG TAB',
				'stock' => '108',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2391 =>
			array (
				'codename' => 'OBT00001059',
				'name' => 'CAPTOPRIL 12,5 MG TAB',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2392 =>
			array (
				'codename' => 'ALK00000589',
				'name' => 'WING NEEDLE NO 21G X 3/4 TERUMO',
				'stock' => '123',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2393 =>
			array (
				'codename' => 'OBT00001050',
				'name' => 'DOGMATIL 50 MG CAP',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2394 =>
			array (
				'codename' => 'OBT00001055',
				'name' => 'ACTIFED EXPEC/HIJAU SYR 60 ML',
				'stock' => '466',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2395 =>
			array (
				'codename' => 'OBT00001054',
				'name' => 'CENDO LFX EYE DROP',
				'stock' => '762',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2396 =>
			array (
				'codename' => 'OBT00001170',
				'name' => 'LAMICTAL 50 MG TAB',
				'stock' => '65',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2397 =>
			array (
				'codename' => 'OBT00001169',
				'name' => 'DEPAKOTE ER 500 MG TAB',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2398 =>
			array (
				'codename' => 'OBT00001167',
				'name' => 'ATIVAN 0,5 MG TAB',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2399 =>
			array (
				'codename' => 'OBT00001161',
				'name' => 'HERBESSER 60 MG TAB',
				'stock' => '45',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2400 =>
			array (
				'codename' => 'OBT00001156',
				'name' => 'KETOROLAC TROMETAMOL 30 MG INJ',
				'stock' => '134',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2401 =>
			array (
				'codename' => 'OBT00001155',
				'name' => 'METHYLPREDNISOLONE 125 MG INJ',
				'stock' => '355',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2402 =>
			array (
				'codename' => 'OBT00001154',
				'name' => 'MIKASIN 250 MG INJ',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2403 =>
			array (
				'codename' => 'ALK00001500',
				'name' => 'CLIP STATUS PASIEN - WHITE',
				'stock' => '7',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2404 =>
			array (
				'codename' => 'OBT00001044',
				'name' => 'GENGIGEL',
				'stock' => '1456',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2405 =>
			array (
				'codename' => 'ALK00000586',
				'name' => 'VICRYL PLUS 2-0 VCP 517H',
				'stock' => '1293',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2406 =>
			array (
				'codename' => 'ALK00000585',
				'name' => 'VICRYL 2-0 W9121',
				'stock' => '1089',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2407 =>
			array (
				'codename' => 'ALK00001492',
				'name' => 'SPINOCAN NEEDLE 29G#',
				'stock' => '770',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2408 =>
			array (
				'codename' => 'ALK00001226',
				'name' => 'VISION URETER CATH TIEMANN 4 FR OPEN TIP (UR-850470)',
				'stock' => '3245',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2409 =>
			array (
				'codename' => 'ALK00000584',
				'name' => 'VICRYL 2-0 TAPER (W9463)',
				'stock' => '1203',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2410 =>
			array (
				'codename' => 'ALK00000583',
				'name' => 'VERBAN 4 X 8 CM DRC',
				'stock' => '36',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2411 =>
			array (
				'codename' => 'ALK00001194',
				'name' => 'URETER CATH SELEC-TIP NO. 4 BARD BENGKOK',
				'stock' => '9625',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2412 =>
			array (
				'codename' => 'ALK00001188',
				'name' => 'TROCAR XCEL BLADELESS NO.5 MM (B5LT)',
				'stock' => '22440',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2413 =>
			array (
				'codename' => 'ALK00000581',
				'name' => 'VERBAN 4 X 10 CM DRC',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2414 =>
			array (
				'codename' => 'ALK00000579',
				'name' => 'VASOFIX SAFETY G22 X 1',
				'stock' => '338',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2415 =>
			array (
				'codename' => 'ALK00001178',
				'name' => 'TONGKAT KETIAK SHIMA ALUMUNIUM MEDIUM (SM- 8061-M)',
				'stock' => '2200',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2416 =>
			array (
				'codename' => 'ALK00001172',
				'name' => 'SYR INJECTOR 120 FLOW SELECTOR (2.0,4.0,6.0ML/H)',
				'stock' => '4437',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2417 =>
			array (
				'codename' => 'ALK00000577',
				'name' => 'VASOFIX SAFETY 20 X 11/4',
				'stock' => '322',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2418 =>
			array (
				'codename' => 'ALK00001157',
				'name' => 'STOMACH TUBE NO.10 TERUMO',
				'stock' => '165',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2419 =>
			array (
				'codename' => 'ALK00001147',
				'name' => 'SPALK 30X 6CM TANGAN DEWASA',
				'stock' => '120',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2420 =>
			array (
				'codename' => 'ALK00001135',
				'name' => 'RESUSCITATION KIT W- 60 MM MASK',
				'stock' => '2992',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2421 =>
			array (
				'codename' => 'ALK00000576',
				'name' => 'USG PAPER MITSUBISHI K91HG',
				'stock' => '2888',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2422 =>
			array (
				'codename' => 'ALK00001103',
				'name' => 'POT PLASTIK 50 GRAM',
				'stock' => '55',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2423 =>
			array (
				'codename' => 'ALK00001102',
				'name' => 'POT PLASTIK 30 GRAM',
				'stock' => '28',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2424 =>
			array (
				'codename' => 'ALK00001098',
				'name' => 'POLYSORB 4-0 TAPER UL-203',
				'stock' => '1364',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2425 =>
			array (
				'codename' => 'ALK00000575',
				'name' => 'USG PAPER MITSUBISHI CK30 L(COLOUR)',
				'stock' => '5225',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2426 =>
			array (
				'codename' => 'ALK00000573',
				'name' => 'URINE COLLEC PEAD 100 ML JMS',
				'stock' => '418',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2427 =>
			array (
				'codename' => 'ALK00001094',
				'name' => 'POLYSORB 2-0 GL 183 (TAPPER)',
				'stock' => '1045',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2428 =>
			array (
				'codename' => 'ALK00001090',
				'name' => 'PLATE DIATERMI MONO CABLE INFANT (AMPW03)',
				'stock' => '1320',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2429 =>
			array (
				'codename' => 'ALK00000572',
				'name' => 'URINE BAG 2000ML /ONEMED/ROYAL/REMIDI',
				'stock' => '43',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2430 =>
			array (
				'codename' => 'ALK00001063',
				'name' => 'NEONATAL MASK 35 MM RD 803',
				'stock' => '2398',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2431 =>
			array (
				'codename' => 'ALK00001044',
				'name' => 'NECK COLLAR SOFT PRATAMA (MEDIUM)',
				'stock' => '2750',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2432 =>
			array (
				'codename' => 'ALK00000570',
				'name' => 'UNDERPAD STERIL  60 X 90',
				'stock' => '76',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2433 =>
			array (
				'codename' => 'ALK00000569',
				'name' => 'UMBILICAL CATHETER PVC NO.6 FR-40 CM (270.06)',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2434 =>
			array (
				'codename' => 'ALK00001011',
				'name' => 'MERSILK 3-0 W212',
				'stock' => '764',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2435 =>
			array (
				'codename' => 'ALK00000984',
				'name' => 'LIGACLIP APPLIER SMALL (MCS20)',
				'stock' => '39600',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2436 =>
			array (
				'codename' => 'ALK00000568',
				'name' => 'UMBILICAL CATHETER NO.4 ',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2437 =>
			array (
				'codename' => 'ALK00000567',
				'name' => 'UMBILICAL CATHETER 3.5 FR-40 CM (270.03)',
				'stock' => '605',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2438 =>
			array (
				'codename' => 'ALK00000965',
				'name' => 'JACKSON REES CIRCUIT 0,5 LITER (6418)/(2122)',
				'stock' => '6160',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2439 =>
			array (
				'codename' => 'ALK00000889',
				'name' => 'CERTOFIX TRIO PAED S 513 B BRAUN(4167244)',
				'stock' => '9350',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2440 =>
			array (
				'codename' => 'OBT00001248',
				'name' => 'ASAM MEFENAMAT 500 MG TAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2441 =>
			array (
				'codename' => 'OBT00001245',
				'name' => 'NATRIUM/SODIUM DIKLOFENAK 25 MG TAB',
				'stock' => '4',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2442 =>
			array (
				'codename' => 'OBT00001241',
				'name' => 'LIXIANA FC 60 MG TAB   ',
				'stock' => '265',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2443 =>
			array (
				'codename' => 'OBT00001251',
				'name' => 'CANESTEN SD-VT (VAGINAL TAB)',
				'stock' => '1176',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2444 =>
			array (
				'codename' => 'OBT00001166',
				'name' => 'ZYPRAZ 1 MG TAB',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2445 =>
			array (
				'codename' => 'OBT00001165',
				'name' => 'ZYPRAZ 0,5 MG TAB',
				'stock' => '27',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2446 =>
			array (
				'codename' => 'OBT00001234',
				'name' => 'KALXETIN 10 MG CAP',
				'stock' => '44',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2447 =>
			array (
				'codename' => 'OBT00001238',
				'name' => 'BONEVELL 6 MG/6ML INF',
				'stock' => '10450',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2448 =>
			array (
				'codename' => 'OBT00001237',
				'name' => 'KALTOFREN 100 MG SUPPOSITORIA',
				'stock' => '138',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2449 =>
			array (
				'codename' => 'ALK00000974',
				'name' => 'KAPSUL KOSONG OO',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2450 =>
			array (
				'codename' => 'ALK00000972',
				'name' => 'KAPSUL KOSONG 2',
				'stock' => '1',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2451 =>
			array (
				'codename' => 'ALK00000566',
				'name' => 'TUBING IRIGASI STORZ (031218) NEW',
				'stock' => '4503',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2452 =>
			array (
				'codename' => 'OBT00001230',
				'name' => 'STARCEF 200 MG TAB',
				'stock' => '280',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2453 =>
			array (
				'codename' => 'OBT00001227',
				'name' => 'PAMOL 125MG SUPP',
				'stock' => '110',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2454 =>
			array (
				'codename' => 'ALK00001221',
				'name' => 'VICRYL PLUS 4-0 VCP 422H',
				'stock' => '1182',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2455 =>
			array (
				'codename' => 'ALK00001118',
				'name' => 'PROLENE 6-0 W8697',
				'stock' => '1586',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2456 =>
			array (
				'codename' => 'ALK00001112',
				'name' => 'PROLENE 4-0 8682H',
				'stock' => '1510',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2457 =>
			array (
				'codename' => 'ALK00001107',
				'name' => 'PROLENE 2-0 W8623',
				'stock' => '2088',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2458 =>
			array (
				'codename' => 'ALK00001105',
				'name' => 'PROLENE 2-0 TAPER (8833H)',
				'stock' => '1323',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2459 =>
			array (
				'codename' => 'ALK00000565',
				'name' => 'TRANSOFIX BBRAUN',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2460 =>
			array (
				'codename' => 'ALK00001052',
				'name' => 'NEEDLE BD ULTRA-FINE PEN 4 MM X 32 G ',
				'stock' => '25',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2461 =>
			array (
				'codename' => 'ALK00001046',
				'name' => 'NEEDLE 23G X 1 1/4 TERUMO',
				'stock' => '12',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2462 =>
			array (
				'codename' => 'ALK00000564',
				'name' => 'TRANSFUSION/BLOOD SET (VL TR-00) FRESENIUS ',
				'stock' => '303',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2463 =>
			array (
				'codename' => 'ALK00000562',
				'name' => 'TIP CLEANER FOR ELECT.DISP 580',
				'stock' => '385',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2464 =>
			array (
				'codename' => 'ALK00001029',
				'name' => 'MONOSYN 2-0 HRT 37 TAPER (B. BRAUN)',
				'stock' => '1839',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2465 =>
			array (
				'codename' => 'ALK00001028',
				'name' => 'MONOSYN 1 HR48',
				'stock' => '2018',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2466 =>
			array (
				'codename' => 'ALK00001018',
				'name' => 'MONOCRYL 3-0 CUTTING (MCP4271H)',
				'stock' => '1466',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2467 =>
			array (
				'codename' => 'ALK00000561',
				'name' => 'THOCAR THORACIC CATHETER OPEN TIP CH 28 (11228)',
				'stock' => '1498',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2468 =>
			array (
				'codename' => 'ALK00001007',
				'name' => 'MERSILK 1 W215',
				'stock' => '887',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2469 =>
			array (
				'codename' => 'ALK00000978',
				'name' => 'LAPARATOMY SPONGES X-RAY 170X12CM 8PLY (170128HX) HOSPILAB',
				'stock' => '3',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2470 =>
			array (
				'codename' => 'ALK00000560',
				'name' => 'THOCAR THORACIC CATHETER OPEN TIP CH 24 (11224)',
				'stock' => '1584',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2471 =>
			array (
				'codename' => 'ALK00000558',
				'name' => 'TEGADERM PAD TM3591 (9 X 25CM)',
				'stock' => '556',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2472 =>
			array (
				'codename' => 'OBT00001039',
				'name' => 'FURAMIN 25 MG/10 ML INJ',
				'stock' => '121',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2473 =>
			array (
				'codename' => 'OBT00001033',
				'name' => 'PARATUSIN TAB',
				'stock' => '11',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2474 =>
			array (
				'codename' => 'ALK00000557',
				'name' => 'TEGADERM PAD 3586 (9CM X 10CM)',
				'stock' => '459',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2475 =>
			array (
				'codename' => 'ALK00000837',
				'name' => 'ZEMBRA WIRE 0.25 X 150 STRT',
				'stock' => '12100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2476 =>
			array (
				'codename' => 'ALK00000835',
				'name' => 'GAUZE PADS (3527 H)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2477 =>
			array (
				'codename' => 'ALK00000831',
				'name' => 'DIAPERS DEWASA LIFEFREE M(4)',
				'stock' => '61',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2478 =>
			array (
				'codename' => 'ALK00000556',
				'name' => 'TEGADERM PAD 3582 (5 X 7 CM)',
				'stock' => '88',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2479 =>
			array (
				'codename' => 'OBT00001028',
				'name' => 'VAKSIN INFANRIX-IPV+HIB',
				'stock' => '5198',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2480 =>
			array (
				'codename' => 'ALK00000555',
				'name' => 'TEGADERM IV 1633 (7 X 8.5CM)',
				'stock' => '132',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2481 =>
			array (
				'codename' => 'ALK00000835',
				'name' => 'GAUZE PADS (3527 H)',
				'stock' => '14',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2482 =>
			array (
				'codename' => 'ALK00000829',
				'name' => 'PLESTERIN BULAT PE ANTI AIR',
				'stock' => '2',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2483 =>
			array (
				'codename' => 'ALK00000554',
				'name' => 'TEGADERM IV 1623 (6 X 7 CM)',
				'stock' => '54',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2484 =>
			array (
				'codename' => 'OBT00001024',
				'name' => 'SANTAGESIK 500 MG/ML INJ',
				'stock' => '100',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2485 =>
			array (
				'codename' => 'BBK00000290',
				'name' => 'SYS WASH ELECSYS COBAS (11930346122)',
				'stock' => '5445',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2486 =>
			array (
				'codename' => 'CLEANCELL ELECSYS COBAS (11662970122)',
				'name' => 'CLEANCELL ELECSYS COBAS (11662970122)',
				'stock' => '1731',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2487 =>
			array (
				'codename' => 'ALK00000552',
				'name' => 'TEGADERM 1626 (10 X 12 CM)',
				'stock' => '173',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2488 =>
			array (
				'codename' => 'ALK00000821',
				'name' => 'SANGOFIX B-BRAUN',
				'stock' => '385',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2489 =>
			array (
				'codename' => 'ALK00000818',
				'name' => 'SYR INJECTOR 60 MONO FLOW TYPE 2.0 ML/H(CPDH013)',
				'stock' => '3710',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2490 =>
			array (
				'codename' => 'ALK00000551',
				'name' => 'TEGADERM 1624 6 X 7CM',
				'stock' => '77',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2491 =>
			array (
				'codename' => 'OBT00001021',
				'name' => 'CLINOLEIC 20% INF 250 ML ',
				'stock' => '3300',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2492 =>
			array (
				'codename' => 'OBT00001018',
				'name' => 'TRICEFIN 1 GRAM INJEKSI',
				'stock' => '1800',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2493 =>
			array (
				'codename' => 'ALK00000550',
				'name' => 'TEGADERM 1610 (5 X 5,7 CM)',
				'stock' => '196',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2494 =>
			array (
				'codename' => 'OBT00001012',
				'name' => 'OLD-ATAROC 5 MCG/ML SYR 60ML ',
				'stock' => '576',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2495 =>
			array (
				'codename' => 'OBT00001009',
				'name' => 'VOMETA 5 MG/ML DROP 10 ML',
				'stock' => '434',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2496 =>
			array (
				'codename' => 'ALK00000547',
				'name' => 'SY EASY FOLD 24 HOURS (URINE COLLECTOR)(SY 8020)',
				'stock' => '319',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2497 =>
			array (
				'codename' => 'OBT00001006',
				'name' => 'COMBANTRIN 250 MG TAB#',
				'stock' => '69',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2498 =>
			array (
				'codename' => 'ALK00000808',
				'name' => 'SOFTBAN 6 INCH',
				'stock' => '434',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
			2499 =>
			array (
				'codename' => 'ALK00000806',
				'name' => 'SOFTBAN 3 INCH',
				'stock' => '248',
				'additional_data' => '',
				'created_at' => '2021-11-04 11:54:04',
			),
		);
		foreach ($data as $i){
			$medicine =Medicine::create($i);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('medicines', function($table)
		{
			$table->truncate();
		});
	}
};
