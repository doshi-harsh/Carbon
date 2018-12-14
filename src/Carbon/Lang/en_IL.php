<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'year' => 'a year|%count% years',
    'y' => '%count%yr|%count%yrs',
    'month' => 'a month|%count% months',
    'm' => '%count%mo|%count%mos',
    'week' => 'a week|%count% weeks',
    'w' => '%count%w|%count%w',
    'day' => 'a day|%count% days',
    'd' => '%count%d|%count%d',
    'hour' => 'an hour|%count% hours',
    'h' => '%count%h|%count%h',
    'minute' => 'a minute|%count% minutes',
    'min' => '%count%m|%count%m',
    'second' => 'a few seconds|%count% seconds',
    's' => '%count%s|%count%s',
    'ago' => ':time ago',
    'from_now' => 'in :time',
    'after' => ':time after',
    'before' => ':time before',
    'diff_now' => 'just now',
    'diff_yesterday' => 'yesterday',
    'diff_tomorrow' => 'tomorrow',
    'diff_before_yesterday' => 'before yesterday',
    'diff_after_tomorrow' => 'after tomorrow',
    'period_recurrences' => 'once|%count% times',
    'period_interval' => 'every :interval',
    'period_start_date' => 'from :date',
    'period_end_date' => 'to :date',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Today at] LT',
        'nextDay' => '[Tomorrow at] LT',
        'nextWeek' => 'dddd [at] LT',
        'lastDay' => '[Yesterday at] LT',
        'lastWeek' => '[Last] dddd [at] LT',
        'sameElse' => 'L',
    ],
    'months' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    'months_short' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    'weekdays' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    'weekdays_short' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    'weekdays_min' => ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    'ordinal' => function ($number) {
        $lastDigit = $number % 10;

        return $number.(
            (~~($number % 100 / 10) === 1) ? 'th' : (
                ($lastDigit === 1) ? 'st' : (
                    ($lastDigit === 2) ? 'nd' : (
                        ($lastDigit === 3) ? 'rd' : 'th'
                    )
                )
            )
        );
    },
];
