PROGRAM PrintQueryParameter(INPUT, OUTPUT);
USES
  Dos;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Query: STRING;
  A: INTEGER;
BEGIN {GetQueryStringParameter}
  Query := GetEnv('QUERY_STRING');
  A := POS(Key + '=', Query);
  IF A <> 0
  THEN
    BEGIN
      DELETE(Query, 1, A + LENGTH(Key));
      A := POS('&', Query);
      IF A <> 0
      THEN
        GetQueryStringParameter := COPY(Query, 1, A - 1)
      ELSE
        GetQueryStringParameter := Query
    END
  ELSE
    GetQueryStringParameter := ''
END; {GetQueryStringParameter}

BEGIN {PrintQueryParameter}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {PrintQueryParameter}
