#!/usr/bin/env python
# coding: utf-8

# In[23]:


import pyautogui
import time
import pyperclip
import pandas as pd

# vai forçar uma pausa de um segundo para cada comando
pyautogui.PAUSE = 1

#################################### ABERTURA DE NAVEGADOR E ABA #######################################
# o código abaixo abre o navegador chrome
#pyautogui.press("winleft")
#pyautogui.write("chrome")
#pyautogui.press("enter")

pyautogui.alert("Vai começar, aperte OK e não mexa em nada!")

# abre uma nova aba no navegador
pyautogui.hotkey('ctrl','t')

#################################### ACESSO AO GOOGLE DRIVE E DOWNLOAD DA PLANILHA #####################
# acessa o google drive
# o arquivo foi subido temporariamente para o meu drive na pasta Apagar
# criamos uma variável chamada link que receberá o endereço do drive que queremos acessar
link = "https://drive.google.com/drive/u/0/folders/1GD4NTBi2Gx5RK_ayByLBrccVz5LHLbnI"

# armazena o valor da variável link na memória para ser usado com pyautogui, pois o mesmo não trabalha com caracteres especiais
pyperclip.copy(link)

# cola o valor armazenado na memória, neste caso, o link armazenado pelo pyperclip
pyautogui.hotkey("ctrl","v")

# pressiona uma tecla do teclado, neste caso Enter, para acessar o endereço
pyautogui.press("enter")

# aguarda 15 segundos antes de ir para o próximo comando, dando tempo para a página carregar
time.sleep(10)

# fornece a posição (x, y) do mouse (pixel relativo a tela do computador que está está executando, mudando com o computador)
# pyautogui.position()

# clique duplo na pasta aula 1
pyautogui.click(425, 406, clicks=2)
time.sleep(1)

# clica no arquivo para aparecer os três pontinhos de download
pyautogui.click(503, 547)

# clica nos três pontinhos para abrir o menu de opções do drive
pyautogui.click(1164, 169)

# clica na opção download
pyautogui.click(968, 577)

# estas linhas abaixo se aplicam ao navegador firefox, onde tem que clicar em salvar o arquivo.
# para o chrome, pode pular este código, indo direto para o time.sleep(10)
time.sleep(5)

pyautogui.click(525, 410)
pyautogui.click(757, 494)

time.sleep(10)

#################################### IMPORTANDO A BASE DE DADOS #####################

# criação de variável dataframe para receber os dados da planilha excel
df = pd.read_excel(r'C:/Users/eliez/Downloads/Vendas - Dez.xlsx')

# apresenta os dados importados na tela de códigos
# display(df)

#################################### CALCULANDO OS INDICADORES #####################
# faturamento: soma todo o faturamento das vendas pela coluna Valor Final
# qtde_produtos: soma toda a quantidade de produtos vendidos pela coluna Quantidade
faturamento = df['Valor Final'].sum()
qtde_produtos = df['Quantidade'].sum()

#################################### CRIANDO UM RELATÓRIO VIA E-MAIL #####################
# abre uma nova aba
pyautogui.hotkey('ctrl', 't')

# ao abrir aba, barra de endereços está automaticamente selecionada
# escrevemos o endereço do gmail e pressionamos enter
pyautogui.write("mail.google.com")
pyautogui.press('enter')
time.sleep(15)

# criar um novo e-mail
# clicar em compose
pyautogui.click(85, 226)
time.sleep(5)

# inserindo cabeçalho
pyautogui.write('eliezer.r.ladeira+python@gmail.com')
pyautogui.press('tab')
pyautogui.press('tab')

assunto = "Relatório de Vendas de Ontem"
pyperclip.copy(assunto)
pyautogui.hotkey('ctrl', 'v')
time.sleep(1)

# escrevendo o corpo do e-mail
pyautogui.press('tab')

# f indica que haverá um texto com variáveis inputadas a ele
# o texto formatado deve ser colocado entre 3 aspas duplas ou simples
# ,.2f indica a formatação que esse valor terá:
#       (:) indica que haverá uma formatação
#       (,) indica que o separador de milhar será vírgula
#       (.2f) indica que o separador de casas decimais será ponto e serão 2 casas decimais
texto = f"""
Prezados, bom dia!

O faturamento de ontem foi de R$ {faturamento:,.2f}
A quantidade de produtos foi de {qtde_produtos:,}

Abs
Eliezer"""

# cola o texto no corpo do e-mail
pyperclip.copy(texto)
pyautogui.hotkey('ctrl', 'v')

# envia o e-mail com ctrl+enter
pyautogui.hotkey('ctrl', 'enter')

time.sleep(10)
print(pyautogui.position())

#time.sleep(10)
#print(pyautogui.position())


# In[ ]:




