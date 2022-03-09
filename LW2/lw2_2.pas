PROGRAM PaulRevere(INPUT, OUTPUT);
USES
  Dos;
VAR
  Lanterns, VarName: STRING;
  A: INTEGER;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  VarName := 'lanterns';
  Lanterns := GetEnv('QUERY_STRING');
  A := POS(VarName + '=', Lanterns);
  IF A <> 0
  THEN
    BEGIN
      DELETE(Lanterns, 1, A+LENGTH(VarName));
      IF Lanterns = '1'
      THEN
        WRITELN('The British are coming by land.')
      ELSE
        IF Lanterns = '2'
        THEN
          WRITELN('The North Church shows only ', Lanterns, '.')
    END
  ELSE
    WRITELN('The North Church shows only ', Lanterns, '.')
END. {PaulRevere}
