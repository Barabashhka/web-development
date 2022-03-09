PROGRAM PrintHello(INPUT, OUTPUT);
USES
  Dos;
VAR
  A: INTEGER;
  Name, QString: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QString := GetEnv('QUERY_STRING');
  A := POS('name=', QString);
  IF A <> 0
  THEN
    BEGIN
      DELETE(QString, 1, A+4);
      A := POS('&', QString);
      IF A <> 0
      THEN
        Name := Copy(QString, 1, A-1)
      ELSE
        Name := QString;
      IF Name = ''
      THEN
        WRITELN('Hello anonymous!')
      ELSE
        WRITELN('Hello dear, ', Name)
    END
  ELSE
    WRITELN('Hello anonymous!')
END.
