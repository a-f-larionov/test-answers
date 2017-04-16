# - фильтруем: grep "Fatal Error"
# - сортируем, для правильной группировки: sort
# - группируем, выводя кол-во повторов: uniq -ci
# - сортируем по кол-ву повторов: sort -grb

cat file.log | grep "Fatal Error" | sort | uniq -ci | sort -grb