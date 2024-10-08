// Set moment.js as date formatter

jQuery.datetimepicker.setDateFormatter({
    parseDate: function (date, format) {
        var d = moment(date, format);
        return d.isValid() ? d.toDate() : false;
    },

    formatDate: function (date, format) {
        return moment(date).format(format);
    }
});

jQuery.datetimepicker.setLocale(datetimescripts_strings.locale);
//jQuery.datetimepicker.setDateFormatter('moment');