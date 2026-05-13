import docx
doc = docx.Document('ProjeOdevi_Webtekno.docx')
with open('docx_content.txt', 'w', encoding='utf-8') as f:
    f.write('\n'.join([p.text for p in doc.paragraphs]))
