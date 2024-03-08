FROM python:3.9

WORKDIR /app

COPY src/requirements.txt .
COPY src/run.py .
COPY src/templates templates/

RUN pip install --no-cache-dir -r requirements.txt

EXPOSE 5000

CMD ["python", "run.py"]
