FROM python:3.9

WORKDIR /app

COPY src/requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY src/run.py .
COPY src/templates templates/
COPY src/static static/

EXPOSE 5000

CMD ["python", "run.py"]
