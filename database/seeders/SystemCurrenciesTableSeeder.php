<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SystemCurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_currencies')->delete();
        
        \DB::table('system_currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'UAE Dirham',
                'code' => 'AED',
                'symbol' => 'دإ‏',
                'format' => 'دإ‏ 1,0.00',
                'exchange_rate' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Afghanistan, Afghani',
                'code' => 'AFN',
                'symbol' => '؋',
                'format' => '؋1,0.00',
                'exchange_rate' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albania, Lek',
                'code' => 'ALL',
                'symbol' => 'Lek',
                'format' => '1,0.00Lek',
                'exchange_rate' => '0',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Armenian Dram',
                'code' => 'AMD',
                'symbol' => '&#1423;',
                'format' => '1,0.00 &#1423;',
                'exchange_rate' => '0',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Netherlands Antillian Guilder',
                'code' => 'ANG',
                'symbol' => 'ƒ',
                'format' => 'ƒ1,0.00',
                'exchange_rate' => '0',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Angola, Kwanza',
                'code' => 'AOA',
                'symbol' => 'Kz',
                'format' => 'Kz1,0.00',
                'exchange_rate' => '0',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Argentine Peso',
                'code' => 'ARS',
                'symbol' => '$',
                'format' => '$ 1,0.00',
                'exchange_rate' => '0',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Aruban Guilder',
                'code' => 'AWG',
                'symbol' => 'ƒ',
                'format' => 'ƒ1,0.00',
                'exchange_rate' => '0',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Azerbaijanian Manat',
                'code' => 'AZN',
                'symbol' => '₼',
                'format' => '1 0,00 ₼',
                'exchange_rate' => '0',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bosnia and Herzegovina, Convertible Marks',
                'code' => 'BAM',
                'symbol' => 'КМ',
                'format' => '1,0.00 КМ',
                'exchange_rate' => '0',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Barbados Dollar',
                'code' => 'BBD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bangladesh, Taka',
                'code' => 'BDT',
                'symbol' => '৳',
                'format' => '৳ 1,0.',
                'exchange_rate' => '0',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Bulgarian Lev',
                'code' => 'BGN',
                'symbol' => 'лв.',
                'format' => '1 0,00 лв.',
                'exchange_rate' => '0',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bahraini Dinar',
                'code' => 'BHD',
                'symbol' => '.د.',
                'format' => '.د. 1,0.000',
                'exchange_rate' => '0',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Burundi Franc',
                'code' => 'BIF',
                'symbol' => 'FBu',
                'format' => '1,0.FBu',
                'exchange_rate' => '0',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bermudian Dollar',
                'code' => 'BMD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Brunei Dollar',
                'code' => 'BND',
                'symbol' => '$',
                'format' => '$1,0.',
                'exchange_rate' => '0',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bolivia, Boliviano',
                'code' => 'BOB',
                'symbol' => 'Bs',
                'format' => 'Bs 1,0.00',
                'exchange_rate' => '0',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Brazilian Real',
                'code' => 'BRL',
                'symbol' => 'R$',
                'format' => 'R$ 1,0.00',
                'exchange_rate' => '0',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Bahamian Dollar',
                'code' => 'BSD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Bhutan, Ngultrum',
                'code' => 'BTN',
                'symbol' => 'Nu.',
                'format' => 'Nu. 1,0.0',
                'exchange_rate' => '0',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Botswana, Pula',
                'code' => 'BWP',
                'symbol' => 'P',
                'format' => 'P1,0.00',
                'exchange_rate' => '0',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Belarussian Ruble',
                'code' => 'BYN',
                'symbol' => 'р.',
                'format' => '1 0,00 р.',
                'exchange_rate' => '0',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Belize Dollar',
                'code' => 'BZD',
                'symbol' => 'BZ$',
                'format' => 'BZ$1,0.00',
                'exchange_rate' => '0',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Franc Congolais',
                'code' => 'CDF',
                'symbol' => 'FC',
                'format' => '1,0.00FC',
                'exchange_rate' => '0',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'CHF',
                'format' => '1\'0.00 CHF',
                'exchange_rate' => '0',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Chilean Peso',
                'code' => 'CLP',
                'symbol' => '$',
                'format' => '$ 1,0.00',
                'exchange_rate' => '0',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'China Yuan Renminbi',
                'code' => 'CNY',
                'symbol' => '¥',
                'format' => '¥1,0.00',
                'exchange_rate' => '0',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Colombian Peso',
                'code' => 'COP',
                'symbol' => '$',
                'format' => '$ 1,0.00',
                'exchange_rate' => '0',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Costa Rican Colon',
                'code' => 'CRC',
                'symbol' => '₡',
                'format' => '₡1,0.00',
                'exchange_rate' => '0',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Cuban Convertible Peso',
                'code' => 'CUC',
                'symbol' => 'CUC',
                'format' => 'CUC1,0.00',
                'exchange_rate' => '0',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Cuban Peso',
                'code' => 'CUP',
                'symbol' => '$MN',
                'format' => '$MN1,0.00',
                'exchange_rate' => '0',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Cape Verde Escudo',
                'code' => 'CVE',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Czech Koruna',
                'code' => 'CZK',
                'symbol' => 'Kč',
                'format' => '1 0,00 Kč',
                'exchange_rate' => '0',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Djibouti Franc',
                'code' => 'DJF',
                'symbol' => 'Fdj',
                'format' => '1,0.Fdj',
                'exchange_rate' => '0',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Danish Krone',
                'code' => 'DKK',
                'symbol' => 'kr.',
                'format' => '1 0,00 kr.',
                'exchange_rate' => '0',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Dominican Peso',
                'code' => 'DOP',
                'symbol' => 'RD$',
                'format' => 'RD$1,0.00',
                'exchange_rate' => '0',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Algerian Dinar',
                'code' => 'DZD',
                'symbol' => 'د.ج‏',
                'format' => 'د.ج‏ 1,0.00',
                'exchange_rate' => '0',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Egyptian Pound',
                'code' => 'EGP',
                'symbol' => 'ج.م',
                'format' => 'ج.م 1,0.00',
                'exchange_rate' => '0',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Eritrea, Nakfa',
                'code' => 'ERN',
                'symbol' => 'Nfk',
                'format' => '1,0.00Nfk',
                'exchange_rate' => '0',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Ethiopian Birr',
                'code' => 'ETB',
                'symbol' => 'ETB',
                'format' => 'ETB1,0.00',
                'exchange_rate' => '0',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'format' => '1.0,00 €',
                'exchange_rate' => '0',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Fiji Dollar',
                'code' => 'FJD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Falkland Islands Pound',
                'code' => 'FKP',
                'symbol' => '£',
                'format' => '£1,0.00',
                'exchange_rate' => '0',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Pound Sterling',
                'code' => 'GBP',
                'symbol' => '£',
                'format' => '£1,0.00',
                'exchange_rate' => '0',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Georgia, Lari',
                'code' => 'GEL',
                'symbol' => 'Lari',
                'format' => '1 0,00 Lari',
                'exchange_rate' => '0',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Ghana Cedi',
                'code' => 'GHS',
                'symbol' => '₵',
                'format' => '₵1,0.00',
                'exchange_rate' => '0',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Gibraltar Pound',
                'code' => 'GIP',
                'symbol' => '£',
                'format' => '£1,0.00',
                'exchange_rate' => '0',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Gambia, Dalasi',
                'code' => 'GMD',
                'symbol' => 'D',
                'format' => '1,0.00D',
                'exchange_rate' => '0',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Guinean franc',
                'code' => 'GNF',
                'symbol' => 'FG',
                'format' => '1,0.00FG',
                'exchange_rate' => '0',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Guatemala, Quetzal',
                'code' => 'GTQ',
                'symbol' => 'Q',
                'format' => 'Q1,0.00',
                'exchange_rate' => '0',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Guyana Dollar',
                'code' => 'GYD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Hong Kong Dollar',
                'code' => 'HKD',
                'symbol' => 'HK$',
                'format' => 'HK$1,0.00',
                'exchange_rate' => '0',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Honduras, Lempira',
                'code' => 'HNL',
                'symbol' => 'L.',
                'format' => 'L. 1,0.00',
                'exchange_rate' => '0',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Croatian Kuna',
                'code' => 'HRK',
                'symbol' => 'kn',
                'format' => '1,0.00 kn',
                'exchange_rate' => '0',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Haiti, Gourde',
                'code' => 'HTG',
                'symbol' => 'G',
                'format' => 'G1,0.00',
                'exchange_rate' => '0',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Hungary, Forint',
                'code' => 'HUF',
                'symbol' => 'Ft',
                'format' => '1 0,00 Ft',
                'exchange_rate' => '0',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Indonesia, Rupiah',
                'code' => 'IDR',
                'symbol' => 'Rp',
                'format' => 'Rp1,0.',
                'exchange_rate' => '0',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'New Israeli Shekel',
                'code' => 'ILS',
                'symbol' => '₪',
                'format' => '₪ 1,0.00',
                'exchange_rate' => '0',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Indian Rupee',
                'code' => 'INR',
                'symbol' => '₹',
                'format' => '1,0.00₹',
                'exchange_rate' => '0',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Iraqi Dinar',
                'code' => 'IQD',
                'symbol' => 'د.ع.‏',
                'format' => 'د.ع.‏ 1,0.00',
                'exchange_rate' => '0',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Iranian Rial',
                'code' => 'IRR',
                'symbol' => '﷼',
                'format' => '﷼ 1,0/00',
                'exchange_rate' => '0',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Iceland Krona',
                'code' => 'ISK',
                'symbol' => 'kr.',
                'format' => '1,0. kr.',
                'exchange_rate' => '0',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Jamaican Dollar',
                'code' => 'JMD',
                'symbol' => 'J$',
                'format' => 'J$1,0.00',
                'exchange_rate' => '0',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Jordanian Dinar',
                'code' => 'JOD',
                'symbol' => 'د.ا.‏',
                'format' => 'د.ا.‏ 1,0.000',
                'exchange_rate' => '0',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Japan, Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'format' => '¥1,0.',
                'exchange_rate' => '0',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Kenyan Shilling',
                'code' => 'KES',
                'symbol' => 'S',
                'format' => 'S1,0.00',
                'exchange_rate' => '0',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Kyrgyzstan, Som',
                'code' => 'KGS',
                'symbol' => 'сом',
                'format' => '1 0-00 сом',
                'exchange_rate' => '0',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Cambodia, Riel',
                'code' => 'KHR',
                'symbol' => '៛',
                'format' => '1,0.៛',
                'exchange_rate' => '0',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Comoro Franc',
                'code' => 'KMF',
                'symbol' => 'CF',
                'format' => '1,0.00CF',
                'exchange_rate' => '0',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'North Korean Won',
                'code' => 'KPW',
                'symbol' => '₩',
                'format' => '₩1,0.',
                'exchange_rate' => '0',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'South Korea, Won',
                'code' => 'KRW',
                'symbol' => '₩',
                'format' => '₩1,0.',
                'exchange_rate' => '0',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Kuwaiti Dinar',
                'code' => 'KWD',
                'symbol' => 'دينار‎‎‏',
                'format' => 'دينار‎‎‏ 1,0.000',
                'exchange_rate' => '0',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Cayman Islands Dollar',
                'code' => 'KYD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Kazakhstan, Tenge',
                'code' => 'KZT',
                'symbol' => '₸',
                'format' => '₸1 0-00',
                'exchange_rate' => '0',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Laos, Kip',
                'code' => 'LAK',
                'symbol' => '₭',
                'format' => '1,0.₭',
                'exchange_rate' => '0',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Lebanese Pound',
                'code' => 'LBP',
                'symbol' => 'ل.ل.‏',
                'format' => 'ل.ل.‏ 1,0.00',
                'exchange_rate' => '0',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Sri Lanka Rupee',
                'code' => 'LKR',
                'symbol' => '₨',
                'format' => '₨ 1,0.',
                'exchange_rate' => '0',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Liberian Dollar',
                'code' => 'LRD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Lesotho, Loti',
                'code' => 'LSL',
                'symbol' => 'M',
                'format' => '1,0.00M',
                'exchange_rate' => '0',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Libyan Dinar',
                'code' => 'LYD',
                'symbol' => 'د.ل.‏',
                'format' => 'د.ل.‏1,0.000',
                'exchange_rate' => '0',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Moroccan Dirham',
                'code' => 'MAD',
                'symbol' => 'د.م.‏',
                'format' => 'د.م.‏ 1,0.00',
                'exchange_rate' => '0',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Moldovan Leu',
                'code' => 'MDL',
                'symbol' => 'lei',
                'format' => '1,0.00 lei',
                'exchange_rate' => '0',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Malagasy Ariary',
                'code' => 'MGA',
                'symbol' => 'Ar',
                'format' => 'Ar1,0.',
                'exchange_rate' => '0',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Macedonia, Denar',
                'code' => 'MKD',
                'symbol' => 'ден.',
                'format' => '1,0.00 ден.',
                'exchange_rate' => '0',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Myanmar, Kyat',
                'code' => 'MMK',
                'symbol' => 'K',
                'format' => 'K1,0.00',
                'exchange_rate' => '0',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Mongolia, Tugrik',
                'code' => 'MNT',
                'symbol' => '₮',
                'format' => '₮1 0,00',
                'exchange_rate' => '0',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Macao, Pataca',
                'code' => 'MOP',
                'symbol' => 'MOP$',
                'format' => 'MOP$1,0.00',
                'exchange_rate' => '0',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Mauritania, Ouguiya',
                'code' => 'MRU',
                'symbol' => 'UM',
                'format' => '1,0.00UM',
                'exchange_rate' => '0',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Maltese Lira',
                'code' => 'MTL',
                'symbol' => '₤',
                'format' => '₤1,0.00',
                'exchange_rate' => '0',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Mauritius Rupee',
                'code' => 'MUR',
                'symbol' => '₨',
                'format' => '₨1,0.00',
                'exchange_rate' => '0',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Maldives, Rufiyaa',
                'code' => 'MVR',
                'symbol' => 'MVR',
                'format' => '1,0.0 MVR',
                'exchange_rate' => '0',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Malawi, Kwacha',
                'code' => 'MWK',
                'symbol' => 'MK',
                'format' => 'MK1,0.00',
                'exchange_rate' => '0',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Mexican Peso',
                'code' => 'MXN',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Malaysian Ringgit',
                'code' => 'MYR',
                'symbol' => 'RM',
                'format' => 'RM1,0.00',
                'exchange_rate' => '0',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Mozambique Metical',
                'code' => 'MZN',
                'symbol' => 'MT',
                'format' => 'MT1,0.',
                'exchange_rate' => '0',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Namibian Dollar',
                'code' => 'NAD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Nigeria, Naira',
                'code' => 'NGN',
                'symbol' => '₦',
                'format' => '₦1,0.00',
                'exchange_rate' => '0',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Nicaragua, Cordoba Oro',
                'code' => 'NIO',
                'symbol' => 'C$',
                'format' => 'C$ 1,0.00',
                'exchange_rate' => '0',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Norwegian Krone',
                'code' => 'NOK',
                'symbol' => 'kr',
                'format' => '1.0,00 kr',
                'exchange_rate' => '0',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Nepalese Rupee',
                'code' => 'NPR',
                'symbol' => '₨',
                'format' => '₨1,0.00',
                'exchange_rate' => '0',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'New Zealand Dollar',
                'code' => 'NZD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Rial Omani',
                'code' => 'OMR',
                'symbol' => '﷼',
                'format' => '﷼ 1,0.000',
                'exchange_rate' => '0',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Panama, Balboa',
                'code' => 'PAB',
                'symbol' => 'B/.',
                'format' => 'B/. 1,0.00',
                'exchange_rate' => '0',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Peru, Nuevo Sol',
                'code' => 'PEN',
                'symbol' => 'S/.',
                'format' => 'S/. 1,0.00',
                'exchange_rate' => '0',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Papua New Guinea, Kina',
                'code' => 'PGK',
                'symbol' => 'K',
                'format' => 'K1,0.00',
                'exchange_rate' => '0',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Philippine Peso',
                'code' => 'PHP',
                'symbol' => '₱',
                'format' => '₱1,0.00',
                'exchange_rate' => '0',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Pakistan Rupee',
                'code' => 'PKR',
                'symbol' => '₨',
                'format' => '₨1,0.00',
                'exchange_rate' => '0',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Poland, Zloty',
                'code' => 'PLN',
                'symbol' => 'zł',
                'format' => '1 0,00 zł',
                'exchange_rate' => '0',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Paraguay, Guarani',
                'code' => 'PYG',
                'symbol' => '₲',
                'format' => '₲ 1,0.00',
                'exchange_rate' => '0',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Qatari Rial',
                'code' => 'QAR',
                'symbol' => '﷼',
                'format' => '﷼ 1,0.00',
                'exchange_rate' => '0',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Romania, New Leu',
                'code' => 'RON',
                'symbol' => 'lei',
                'format' => '1,0.00 lei',
                'exchange_rate' => '0',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Serbian Dinar',
                'code' => 'RSD',
                'symbol' => 'Дин.',
                'format' => '1,0.00 Дин.',
                'exchange_rate' => '0',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Russian Ruble',
                'code' => 'RUB',
                'symbol' => '₽',
                'format' => '1 0,00 ₽',
                'exchange_rate' => '0',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Rwanda Franc',
                'code' => 'RWF',
                'symbol' => 'RWF',
                'format' => 'RWF 1 0,00',
                'exchange_rate' => '0',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Saudi Riyal',
                'code' => 'SAR',
                'symbol' => '﷼',
                'format' => '﷼ 1,0.00',
                'exchange_rate' => '0',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Solomon Islands Dollar',
                'code' => 'SBD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Seychelles Rupee',
                'code' => 'SCR',
                'symbol' => '₨',
                'format' => '₨1,0.00',
                'exchange_rate' => '0',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Sudanese Pound',
                'code' => 'SDG',
                'symbol' => 'ج.س',
                'format' => '1,0.00 Sd',
                'exchange_rate' => '0',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Swedish Krona',
                'code' => 'SEK',
                'symbol' => 'kr',
                'format' => '1 0,00 kr',
                'exchange_rate' => '0',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Singapore Dollar',
                'code' => 'SGD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Saint Helena Pound',
                'code' => 'SHP',
                'symbol' => '£',
                'format' => '£1,0.00',
                'exchange_rate' => '0',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Sierra Leone, Leone',
                'code' => 'SLL',
                'symbol' => 'Le',
                'format' => 'Le1,0.00',
                'exchange_rate' => '0',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Somali Shilling',
                'code' => 'SOS',
                'symbol' => 'S',
                'format' => 'S1,0.00',
                'exchange_rate' => '0',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Surinam Dollar',
                'code' => 'SRD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'South Sudanese pound',
                'code' => 'SSP',
                'symbol' => 'SS£',
                'format' => 'SS £1,0.00',
                'exchange_rate' => '0',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Sao Tome and Principe, Dobra',
                'code' => 'STN',
                'symbol' => 'Db',
                'format' => 'Db1,0.00',
                'exchange_rate' => '0',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'El Salvador Colon',
                'code' => 'SVC',
                'symbol' => '₡',
                'format' => '₡1,0.00',
                'exchange_rate' => '0',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Syrian Pound',
                'code' => 'SYP',
                'symbol' => '£',
                'format' => '£ 1,0.00',
                'exchange_rate' => '0',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Swaziland, Lilangeni',
                'code' => 'SZL',
                'symbol' => 'E',
                'format' => 'E1,0.00',
                'exchange_rate' => '0',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Thailand, Baht',
                'code' => 'THB',
                'symbol' => '฿',
                'format' => '฿1,0.00',
                'exchange_rate' => '0',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Tajikistan, Somoni',
                'code' => 'TJS',
                'symbol' => 'TJS',
                'format' => '1 0;00 TJS',
                'exchange_rate' => '0',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Turkmenistani New Manat',
                'code' => 'TMT',
                'symbol' => 'm',
                'format' => '1 0,m',
                'exchange_rate' => '0',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Tunisian Dinar',
                'code' => 'TND',
                'symbol' => 'د.ت.‏',
                'format' => 'د.ت.‏ 1,0.000',
                'exchange_rate' => '0',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Tonga, Paanga',
                'code' => 'TOP',
                'symbol' => 'T$',
                'format' => 'T$1,0.00',
                'exchange_rate' => '0',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Turkish Lira',
                'code' => 'TRY',
                'symbol' => 'TL',
                'format' => '₺1,0.00',
                'exchange_rate' => '0',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Trinidad and Tobago Dollar',
                'code' => 'TTD',
                'symbol' => 'TT$',
                'format' => 'TT$1,0.00',
                'exchange_rate' => '0',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'New Taiwan Dollar',
                'code' => 'TWD',
                'symbol' => 'NT$',
                'format' => 'NT$1,0.00',
                'exchange_rate' => '0',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Tanzanian Shilling',
                'code' => 'TZS',
                'symbol' => 'TSh',
                'format' => 'TSh1,0.00',
                'exchange_rate' => '0',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Ukraine, Hryvnia',
                'code' => 'UAH',
                'symbol' => '₴',
                'format' => '1 0,00₴',
                'exchange_rate' => '0',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Uganda Shilling',
                'code' => 'UGX',
                'symbol' => 'USh',
                'format' => 'USh1,0.00',
                'exchange_rate' => '0',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Peso Uruguayo',
                'code' => 'UYU',
                'symbol' => '$U',
                'format' => '$U 1,0.00',
                'exchange_rate' => '0',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Uzbekistan Sum',
                'code' => 'UZS',
                'symbol' => 'сўм',
                'format' => '1 0,00 сўм',
                'exchange_rate' => '0',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Venezuela Bolivares soberano',
                'code' => 'VES',
                'symbol' => 'Bs. S.',
                'format' => 'Bs. S. 1,0.00',
                'exchange_rate' => '0',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Viet Nam, Dong',
                'code' => 'VND',
                'symbol' => '₫',
                'format' => '1,0.0 ₫',
                'exchange_rate' => '0',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Vanuatu, Vatu',
                'code' => 'VUV',
                'symbol' => 'VT',
                'format' => '1,0.VT',
                'exchange_rate' => '0',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Samoa, Tala',
                'code' => 'WST',
                'symbol' => 'WS$',
                'format' => 'WS$1,0.00',
                'exchange_rate' => '0',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Central African CFA Franc',
                'code' => 'XAF',
                'symbol' => 'FCFA',
                'format' => '1,0.00 FCFA',
                'exchange_rate' => '0',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'East Caribbean Dollar',
                'code' => 'XCD',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'West African CFA Franc',
                'code' => 'XOF',
                'symbol' => 'FCFA',
                'format' => '1,0.00 FCFA',
                'exchange_rate' => '0',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'CFP Franc',
                'code' => 'XPF',
                'symbol' => 'F',
                'format' => '1,0.00F',
                'exchange_rate' => '0',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Yemeni Rial',
                'code' => 'YER',
                'symbol' => '﷼',
                'format' => '﷼ 1,0.00',
                'exchange_rate' => '0',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'South Africa, Rand',
                'code' => 'ZAR',
                'symbol' => 'R',
                'format' => 'R 1,0.00',
                'exchange_rate' => '0',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Zambia Kwacha',
                'code' => 'ZMW',
                'symbol' => 'ZK',
                'format' => 'ZK1,0.00',
                'exchange_rate' => '0',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Zimbabwean dollar',
                'code' => 'ZWL',
                'symbol' => '$',
                'format' => '$1,0.00',
                'exchange_rate' => '0',
            ),
        ));
        
        
    }
}